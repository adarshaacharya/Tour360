/**
 * Any copyright by Panagiotis Astithas is dedicated to the Public Domain. http://creativecommons.org/publicdomain/zero/1.0/
 *
 * Otherwise, copyright 2012 Pimm Hogeling
 * You can redistribute and/or modify this software under the terms of the Mozilla Public License Version 1.1, the
 * GNU Lesser General Public License version 2.1 or later or the GNU General Public License version 2 or later.
 */

Components.utils.import("resource:///modules/devtools/gcli.jsm");
XPCOMUtils.defineLazyModuleGetter(this, "AddonManager", "resource://gre/modules/AddonManager.jsm");
XPCOMUtils.defineLazyModuleGetter(this, "AddonRepository", "resource://gre/modules/AddonRepository.jsm");

// You might ask yourself, why does the monkey who wrote this put everything in functions and stuff? Well - before I answer
// your question - I'd like to point out that I am a Chinchilla; not a monkey.
// I put things in separate functions, because I don't want one command to reference to another command's (unrelated) helper
// functions. I fear this could prevent memory from being cleared under certain circumstances. If this is an irrational fear,
// feel more than free to clean up my code.

// Add the "parent" command.
gcli.addCommand({
  name: "addon",
  description: {
    "root": "Manipulate add-ons",
    "nl-nl": "Beheer add-ons"
  }
});
(function() {
  function representEnabledAddon(addon) {
    return "<li><![CDATA[" + addon.name + "\u2002" + addon.version + "]]></li>";
  }
  function representDisabledAddon(addon) {
    return "<li style=\"opacity: .6; text-decoration: line-through;\"><![CDATA[" + addon.name + "\u2002" + addon.version + "]]></li>";
  }
  /**
   * Compares two addons by their name. Used in sorting.
   */
  function compareAddonNames(a, b) {
    return String.localeCompare(a.name, b.name);
  }
  /**
   * Resolves the promise which is the scope (this) of this function, filling it with an HTML representation of the passed
   * add-ons.
   */
  function list(addons) {
    // Separate the enabled add-ons from the disabled ones.
    let enabledAddons = [];
    let disabledAddons = [];
    addons.forEach(function(addon) {
      (addon.userDisabled ? disabledAddons : enabledAddons).push(addon);
    });
    // Map and sort the add-ons, and create an HTML list.
    // nl-nl: Deze add-ons zijn op dit moment geinstalleerd:
    this.resolve("The following add-ons are currently installed:" +
      "<ol>" +
      enabledAddons.sort(compareAddonNames).map(representEnabledAddon).join("") +
      disabledAddons.sort(compareAddonNames).map(representDisabledAddon).join("") +
      "</ol>");
  }
  // Add "addon list".
  gcli.addCommand({
    name: "addon list",
    description: {
      "root": "List the installed add-ons",
      "nl-nl": "Toon een lijst van geinstalleerde add-ons"
    },
    exec: function(cliArguments, context) {
      // Create the promise that will be resolved when the add-on listing has been finished.
      let promise = context.createPromise();
      // Get the add-ons. TODO This command lists extensions only, though it looks like "addon install" could also install
      // other types of add-ons. If so, these commands should be more consistent. Also, the name of the parent command -
      // "addon" - might not be completely accurate.
      AddonManager.getAddonsByTypes(["extension"], list.bind(promise));
      return promise;
    }
  });
})();
// The name parameter, used in "addon enable", "addon disable", "addon install" and "addon uninstall".
const nameParameter = {
  name: "name",
  type: "string",
  description: {
    "root": "The name of the add-on",
    "nl-nl": "De naam van de add-on"
  }
};
/**
 * Returns all of the latin characters in the passed string in one long string, converted to lower case.
 */
function convertToSimplifiedLowerCase(input) {
  const latinCharacterFinder = /[a-zA-Z]/g;
  var match;
  const result = [];
  while (null != (match = latinCharacterFinder.exec(input))) {
    result.push(match[0]);
  }
  return result.join("").toLowerCase();
};
// Define the name comparer, which will be used to compare the user input against the names of add-ons.
function NameComparer(targetValue) {
  this.targetValue = convertToSimplifiedLowerCase(targetValue);
}
/**
 * Returns whether the passed name equals the internal name, ignoring the case of the names as well as any non-Latin
 * characters (anything but a-z, so even ignoring numbers and interpunction).
 * Ignoring the case and non-Latin characters makes trivial "mistakes" by the user insignificant. This is probably not the
 * most user-friendly way if said user is actually inputting non-Latin add-on names. Ideally, such input would be taken
 * seriously.
 * If the internal name is shorter than the passed name, only the substring of the passed name that is as long as the
 * internal name is compared. For example, "Borat: Cultural Learnings of America for Make Benefit Glorious Nation of
 * Kazakhstan" equals "Borat". This enables the user to provide only a "short" name of an add-on, and still have it match.
 */
NameComparer.prototype.compare = function(value) {
  value = convertToSimplifiedLowerCase(value);
  return this.targetValue.substr(0, value.length) == value;
};
/**
 * Returns a string that represents the passed add-on.
 */
function representAddon(addon) {
  return addon.name + " " + addon.version;
}
(function() {
  /**
   * Enables the addon in the passed list which has a name that matches according to the passed name comparer, and resolves
   * the promise which is the scope (this) of this function to display the result of this enable attempt.
   */
  function enable(nameComparer, addons) {
    // Find the add-on. TODO consider adding something that checks for multiple matches. Currently, if the user's input
    // matches multiple add-ons, one of them (kind-of at random) will be enabled. Probably not the best we can do.
    let addon = null;
    addons.some(function(candidate) {
      if (nameComparer.compare(candidate.name)) {
        addon = candidate;
        return true;
      } else {
        return false;
      }
    });
    // Enable the add-on, if it was found. Explain the user what happened. TODO consider checking whether the addon was
    // already enabled. Showing a "success" message when the add-on was already enabled might cause confusion.
    if (null == addon) {
      // nl-nl: De add-on is niet gevonden.
      this.resolve("This add-on was not found.");
    } else {
      addon.userDisabled = false;
      // nl-nl: {$1} is ingeschakeld.
      this.resolve("<![CDATA[" + representAddon(addon) + " has been enabled.]]>");
    }
  }
  // Add "addon enable".
  gcli.addCommand({
    name: "addon enable",
    description: {
      "root": "Enable the specified add-on",
      "nl-nl": "Schakel de gespecificeerde add-on in"
    },
    params: [nameParameter],
    exec: function(cliArguments, context) {
      // Create the promise that will be resolved when the enabling has been finished.
      let promise = context.createPromise();
      // List the installed add-ons, enable one when done listing.
      AddonManager.getAddonsByTypes(["extension"], enable.bind(promise, new NameComparer(cliArguments[nameParameter.name])));
      return promise;
    }
  });
  /**
   * Like enable, but.. you know.. the exact opposite.
   */
  function disable(nameComparer, addons) {
    // Find the add-on.
    let addon = null;
    addons.some(function(candidate) {
      if (nameComparer.compare(candidate.name)) {
        addon = candidate;
        return true;
      } else {
        return false;
      }
    });
    // Disable the add-on, if it was found. Explain the user what happened.
    if (null == addon) {
      // nl-nl: De add-on is niet gevonden.
      this.resolve("Could not find the add-on.");
    } else {
      addon.userDisabled = true;
      // nl-nl: {$1} is uitgeschakeld.
      this.resolve("<![CDATA[" + representAddon(addon) + " has been disabled.]]>");
    }
  }
  // Add "addon disable".
  gcli.addCommand({
    name: "addon disable",
    description: {
      "root": "Disable the specified add-on",
      "nl-nl": "Schakel de gespecificeerde add-on uit"
    },
    params: [nameParameter],
    exec: function(cliArguments, context) {
      // Create the promise that will be resolved when the disabling has been finished.
      let promise = context.createPromise();
      // List the installed add-ons, disable one when done listing.
      AddonManager.getAddonsByTypes(["extension"], disable.bind(promise, new NameComparer(cliArguments[nameParameter.name])));
      return promise;
    }
  });
})();
(function() {
  // Define the callback that will be used when the add-on repository is done searching.
  const AddonSearchCallback = function(promise, inputtedName) {
    this.promise = promise;
    this.nameComparer = new NameComparer(inputtedName);
  }
  /**
   * Explains to the user that the add-on was not found, and makes a suggestion for a more successful install command if
   * possible. Resolves the promise which is the scope (this) of this function.
   */
  function suggest(nameComparer, potentialSuggestion, addons) {
    let alreadyInstalledAddon = null;
    addons.some(function(candidate) {
      if (this.compare(candidate.name)) {
        alreadyInstalledAddon = candidate;
        return true;
      } else {
        return false;
      }
    }, nameComparer);
    if (null != alreadyInstalledAddon) {
      // nl-nl: {$1} is al geinstalleerd.
      this.resolve("<![CDATA[" + representAddon(alreadyInstalledAddon) + " is already installed.]]>");
    } else if (null != potentialSuggestion) {
      // nl-nl: De add-on is niet gevonden. Misschien bedoelde je {$1}.
      this.resolve("Could not find the add-on. Perhaps you meant <code><![CDATA[addon install \"" + potentialSuggestion.name + "\"]]></code>.");
    } else {
      // nl-nl: De add-on is niet gevonden.
      this.resolve("Could not find the add-on.");
    }
  }
  AddonSearchCallback.prototype.searchSucceeded = function(addons, addonCount) {
    // Find the add-on the user was looking for from the search results.
    let addon = null;
    if (0 != addonCount) {
      addons.some(function(candidate) {
        if (this.compare(candidate.name)) {
          addon = candidate;
          return true;
        } else {
          return false;
        }
      }, this.nameComparer);
    }
    if (null != addon) {
      // Inform the user the add-on was found.
      // nl-nl: Bezig met downloaden van {$1}...
      // promise.setProgress("<![CDATA[Downloading " + addon.name + " " + addon.version + "&hellip;]]>");
      addon.install.addListener(new AddonInstallListener(this.promise));
      addon.install.install();
    } else {
      // If not one of the add-ons returned by the repository seems to be what the user was looking for, show a suggestion.
      let searchCallback = this;
      AddonManager.getAddonsByTypes(["extension"], suggest.bind(this.promise, this.nameComparer, 0 == addonCount ? null : addons[0]));
    }
  }
  AddonSearchCallback.prototype.searchFailed = function() {
    // nl-nl: Zoekopdracht mislukt. Misschien kon er geen verbinding worden gemaakt met het add-on magazijn.
    this.promise.resolve("Search failed. Perhaps no connection to the add-on repository could be made.");
  }
  // Define the listener that will be used when an add-on is being installed.
  const AddonInstallListener = function(promise) {
    this.promise = promise;
  };
  const nop = function() {
  };
  AddonInstallListener.prototype = {
    /**
     * Called when a new instance of AddonInstall is created, primarily so UI can display some kind of progress for all
     * installs.
     */
    onNewInstall: nop,
    /**
     * Called when downloading begins for an add-on install. Only called for add-ons that need to be downloaded. A listener
     * may return false to cancel the download.
     */
    onDownloadStarted: nop,
    /**
     * Called as data is received during a download. Check the AddonInstall.progress property for the amount of data
     * downloaded and the AddonInstall.maxProgress property for the total data expected. A listener may return false to
     * cancel the download.
     */
    onDownloadProgress: function(install) {
      // Show the how much of the add-on has been downloaded. TODO Perhaps make this a percentage.
      // nl-nl: Download op {$1}.
      // this.promise.setProgress("Download at " + (install.progress / install.maxProgress) + ".");
    },
    /**
     * Called when downloading completes successfully for an add-on install. Only called for add-ons that need to be
     * downloaded.
     */
    onDownloadEnded: function() {
      // nl-nl: Klaar met downloaden.
      //this.promise.setProgress("Download completed.");
    },
    /**
     * Called when downloading is cancelled. Only called for add-ons that need to be downloaded.
     */
    onDownloadCancelled: function() {
      // nl-nl: Download geannuleerd.
      //this.promise.setProgress("Download cancelled.");
    },
    /**
     * Called if there is some error downloading the add-on. Only called for add-ons that need to be downloaded.
     */
    onDownloadFailed: function() {
      // nl-nl: Download mislukt.
      //this.promise.setProgress("Download failed.");
    },
    /**
     * Called when installation of an add-on begins. A listener may return false to cancel the install.
     */
    onInstallStarted: function() {
      // nl-nl: Bezig met installeren van {$1}...
      // promise.setProgress("<![CDATA[Installing " + addon.name + " " + addon.version + "&hellip;]]>");
    },
    /**
     * Called when installation of an add-on is complete. The newly installed add-on may require a restart in order to become
     * active.
     */
    onInstallEnded: function(install, addon) {
      // The add-on was successfully installed. Love!
      // nl-nl {$1} is geinstalleerd.
      this.promise.resolve("<![CDATA[" + representAddon(addon) + " has been installed.]]>");
      // TODO Determine whether the add-on needs a restart. Inform the user of this fact if so.
    },
    /**
     * Called when installation is cancelled.
     */
    onInstallCancelled: function() {
      // nl-nl: Installatie geannuleerd.
      //this.promise.setProgress("Installation cancelled.");
    },
    /**
     * Called when there is a failure installing the add-on.
     */
    onInstallFailed: function() {
      // nl-nl: Installatie mislukt.
      //this.promise.setProgress("Installation failed.");
    },
    /**
     * Called when an add-on is installed through some system other than an AddonInstall.
     */
    onExternalInstall: nop
  };
  const forceParameter = {
    name: "force",
    type: "boolean",
    description: {
      "root": "Whether an add-on search currently in progress, if existent, should be cancelled.",
      "nl-nl": "Of een zoekopdracht naar add-ons die op dit moment bezig is geannuleerd moet worden, mits deze bestaat."
    },
    defaultValue: false
  }
  gcli.addCommand({
    name: "addon install",
    description: {
      "root": "Install the specified add-on from addons.mozilla.org",
      "nl-nl": "Installeer de gespecificeerde add-on vanaf addons.mozilla.org"
    },
    params: [nameParameter, forceParameter],
    exec: function(cliArguments, context) {
      // Check whether an add-on search is currently in progress.
      if (AddonRepository.isSearching) {
        // Cancel the currently-in-progress search, or explain how this can be done, depending on the "force" parameter.
        if (cliArguments[forceParameter.name]) {
          AddonRepository.cancelSearch();
        } else {
          // nl-nl: Kan niet installeren. Een zoekopdracht naar add-ons is op dit moment bezig. Als je vindt dat dit te lang duurt, gebruik dan "addon install {$1} true" om deze te annuleren.
          return "Unable to install. Another search for add-ons is already in progress. If you feel this search is taking too long, use <code><![CDATA[addon install " + cliArguments[nameParameter.name] + " true]]></code> to cancel it.";
        }
      }
      // Create the promise that will be resolved when the search for add-ons has ended.
      const promise = context.createPromise();
      // Inform the user a search has been initiated.
      // nl-nl: Aan het zoeken naar {$1}...
      // promise.setProgress("<![CDATA[Searching for " + cliArguments[nameParameter.name] + "&hellip;]]>");
      // Search for the add-on.
      AddonRepository.searchAddons(cliArguments[nameParameter.name], 4, new AddonSearchCallback(promise, cliArguments[nameParameter.name]));
      return promise;
    }
  });
})();
(function() {
  /**
   * Uninstalls the addon in the passed list which has a name that matches according to the passed name comparer, and
   * resolves the promise which is the scope (this) of this function to display the result of this uninstall attempt.
   */
  function uninstall(nameComparer, addons) {
    // Find the add-on. TODO consider adding something that checks for multiple matches.
    let addon = null;
    addons.some(function(candidate) {
      if (nameComparer.compare(candidate.name)) {
        addon = candidate;
        return true;
      } else {
        return false;
      }
    });
    // Uninstall the add-on, if it was found. Explain the user what happened.
    if (null == addon) {
      // nl-nl: De add-on is niet gevonden.
      this.resolve("This add-on was not found.");
    } else {
      addon.uninstall();
      // TODO Determine whether the add-on needs a restart. Inform the user of this fact if so.
      // nl-nl: {$1} is gedeinstalleerd.
      this.resolve("<![CDATA[" + representAddon(addon) + " has been uninstalled.]]>");
    }
  }
  // Add "addon uninstall".
  gcli.addCommand({
    name: "addon uninstall",
    description: {
      "root": "Uninstall the specified add-on",
      "nl-nl": "Deinstalleer de gespecificeerde add-on"
    },
    params: [nameParameter],
    exec: function(cliArguments, context) {
      // Create the promise that will be resolved when the uninstalling has been finished.
      let promise = context.createPromise();
      // List the installed add-ons, uninstall one when done listing.
      AddonManager.getAddonsByTypes(["extension"], uninstall.bind(promise, new NameComparer(cliArguments[nameParameter.name])));
      return promise;
    }
  });
})();