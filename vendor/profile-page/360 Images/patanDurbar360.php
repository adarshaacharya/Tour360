<a-scene>
    <a-assets>
        <img src="img/patanDurbar360.jpg" alt="lumbini 360 image" id="patanDurbar360">
    </a-assets>
    <a-sky src="#patanDurbar360" visibility="true"></a-sky>
    <a-camera>
            <a-cursor color="cyan"></a-cursor>
          </a-camera>
         <a-sphere position="2 5 -9" radius="0.5" height="0.5" color="#FFC65D"
    event-set__enter="_event: mouseenter; _target: #cylinderText; visible: true"
    event-set__leave="_event: mouseleave; _target: #cylinderText; visible: false">
         <a-text id="cylinderText" value="Patan Durbar Square" align="center" color="#FFF" visible="false" position="0.4 -0.55 0.6" rotation="0 0 0"
          width="10"  geometry="primitive: plane; width: 5" material="color: #333"></a-text>
</a-sphere>
           
<a-text value="Way to Mangal Bazar ->" position="14 10 -40" rotation="0 -5 -2" width="90"></a-text>
<a-text value="Way to Durbar Square" position="0 -15 40" rotation="0 180 0" width="90"></a-text>
</a-scene> 


<!-- <script src="aframe.js"></script> -->
<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
<script src="https://unpkg.com/aframe-event-set-component@3.0.3/dist/aframe-event-set-component.min.js"></script>
