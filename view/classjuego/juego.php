

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <script src="assets/js/Winwheel.min.js"></script>
        <script src="assets/js/TweenMax.min.js"></script>

    <input type="button" value="Girar" onclick="miRuleta.startAnimation();" />
    <br />
    <br />
    <canvas id='canvas' height="400" width="400"></canvas>

 <script>
     var miRuleta = new Winwheel({
           'numSegments': 5, // Número de segmentos
           'outerRadius'    : 170, // Radio externo
            'segments':[ // Datos de los segmentos
                { 'fillStyle': '#f1c40f', 'text': 'CSharp' },
                { 'fillStyle': '#2ecc71', 'text': 'JavaScript' },
                { 'fillStyle': '#e67e22', 'text': 'Python' },
                { 'fillStyle': '#e74c3c', 'text': 'Php' },
                { 'fillStyle': '#8e44ad', 'text': 'Go' },
            ],
            'animation': { 
                'type': 'spinToStop', // Giro y alto
                'duration': 5, // Duración de giro
                'callbackFinished': 'Mensaje()', // Función para mostrar mensaje
                'callbackAfter': 'dibujarIndicador()' // Funciona de pintar indicador
            }
         });
       
         dibujarIndicador();
       function Mensaje() {
           var SegmentoSeleccionado = miRuleta.getIndicatedSegment();
           alert("Elemento seleccionado:" + SegmentoSeleccionado.text + "!");
           miRuleta.stopAnimation(false);
           miRuleta.rotationAngle = 0;
           miRuleta.draw();
           dibujarIndicador();
       }
       function dibujarIndicador() {
            var ctx = miRuleta.ctx;
            ctx.strokeStyle = 'navy';     
            ctx.fillStyle = 'black';     
            ctx.lineWidth = 2;
            ctx.beginPath();             
            ctx.moveTo(170, 0);          
            ctx.lineTo(230, 0);          
            ctx.lineTo(200, 40);
            ctx.lineTo(171, 0);
            ctx.stroke();                
            ctx.fill();                  
       }
 </script>  
