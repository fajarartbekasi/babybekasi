<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #3c366b;
                color: #ffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="210mm" height="297mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 21000 29700"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                        <defs>
                        <font id="FontID0" horiz-adv-x="666" font-variant="normal" style="fill-rule:nonzero" font-weight="400">
                            <font-face
                                font-family="Helvetica">
                                <font-face-src>
                                    <font-face-name name="Helvetica"/>
                                </font-face-src>
                            </font-face>
                        <missing-glyph><path d="M0 0z"/></missing-glyph>
                        <glyph unicode="." horiz-adv-x="277" d="M85.0036 106.004l102.992 0 0 -1.06004e+002 -1.02992e+002 0 0 106.004z"/>
                        <glyph unicode="A" horiz-adv-x="666" d="M443.998 293.999l-1.09004e+002 317.007 -1.14992e+002 -3.17007e+002 223.995 0zm-1.58999e+002 422.998l109.996 0 260.007 -7.16997e+002 -1.06996e+002 0 -7.20115e+001 214.995 -2.83995e+002 0 -7.79997e+001 -2.14995e+002 -9.89996e+001 0 269.999 716.997z"/>
                        <glyph unicode="B" horiz-adv-x="666" d="M346.003 413.998c40.9959,0 71.9997,5.99998 94.9957,16.996 35.9999,17.9999 53.9998,50.0077 53.9998,97.0036 0,47.0077 -1.90039e+001,77.9997 -5.69998e+001,95.0075 -2.09999e+001,8.99996 -5.29959e+001,12.9921 -9.59996e+001,12.9921l-1.72995e+002 0 0 -2.21999e+002 176.999 0zm31.9959 -3.31003e+002c59.9998,0 103.004,17.0078 128.007,52.0037 15.9921,20.9999 23.9999,47.9998 23.9999,79.0036 0,51.9919 -2.30078e+001,86.9997 -7.00037e+001,105.992 -2.50038e+001,10.0039 -5.69998e+001,14.9999 -9.80075e+001,14.9999l-1.92991e+002 0 0 -2.51999e+002 208.995 0zm-3.04003e+002 634.001l308.007 0c83.9997,0 143.999,-2.4992e+001 178.995,-7.49997e+001 20.9999,-2.89959e+001 31.0038,-6.29998e+001 31.0038,-1.02e+002 0,-4.49998e+001 -1.30039e+001,-8.29957e+001 -3.79959e+001,-1.12003e+002 -1.30039e+001,-1.49999e+001 -3.29999e+001,-2.89959e+001 -5.80037e+001,-4.19998e+001 37.0038,-1.3996e+001 64.0037,-2.99999e+001 82.9957,-4.69959e+001 32.0077,-3.10038e+001 47.9998,-7.49997e+001 47.9998,-1.30003e+002 0,-4.59919e+001 -1.49999e+001,-8.79918e+001 -4.39959e+001,-1.24996e+002 -4.30038e+001,-5.59958e+001 -1.11e+002,-8.39997e+001 -2.06007e+002,-8.39997e+001l-3.02999e+002 0 0 716.997z"/>
                        <glyph unicode="E" horiz-adv-x="666" d="M85.0014 717.002l522.998 0 0 -8.80011e+001 -4.28e+002 0 0 -2.17002e+002 396 0 0 -8.29985e+001 -3.96e+002 0 0 -2.43999e+002 436 0 0 -8.50014e+001 -5.30997e+002 0 0 717.002z"/>
                        <glyph unicode="I" horiz-adv-x="277" d="M98.0002 717.002l98.0002 0 0 -7.17002e+002 -9.80002e+001 0 0 717.002z"/>
                        <glyph unicode="K" horiz-adv-x="666" d="M75.9991 717.002l95.0005 0 0 -3.49002e+002 350.002 349.002 134 0 -2.99e+002 -2.89001e+002 306.999 -4.28e+002 -1.26001e+002 0 -2.50998e+002 360.001 -1.15002e+002 -1.10002e+002 0 -2.49998e+002 -9.50005e+001 0 0 717.002z"/>
                        <glyph unicode="S" horiz-adv-x="666" d="M139.999 231c1.99981,-4.09993e+001 11.0021,-7.39993e+001 28.0005,-9.90001e+001 33,-4.69987e+001 90.0009,-7.09996e+001 171,-7.09996e+001 36.9997,0 69.9997,4.99953 99.0001,15.9985 58.0008,20.0012 87.0012,56.001 87.0012,108.002 0,38.9995 -1.2002e+001,67 -3.59998e+001,83.9984 -2.50008e+001,16.0016 -6.30003e+001,30.0003 -1.16002e+002,41.9992l-9.80002e+001 22.0011c-6.30003e+001,13.9987 -1.07999e+002,30.0003 -1.34e+002,46.9987 -4.59988e+001,30.0003 -6.89998e+001,75.0023 -6.89998e+001,135 0,64.0002 22.0011,117.002 67,158.001 45.002,40.9993 107.999,62.0004 190.001,62.0004 74.9992,0 138,-1.79983e+001 191.001,-5.40012e+001 52.9982,-3.69997e+001 78.9988,-9.49973e+001 78.9988,-1.73999e+002l-9.10008e+001 0c-4.99953e+000,37.9996 -1.59985e+001,67 -3.10002e+001,88.0011 -3.00003e+001,36.9997 -7.99988e+001,56.001 -1.50998e+002,56.001 -5.70009e+001,0 -9.90001e+001,-1.2002e+001 -1.24001e+002,-3.60029e+001 -2.50008e+001,-2.39978e+001 -3.69997e+001,-5.19983e+001 -3.69997e+001,-8.39984e+001 0,-3.49998e+001 13.9987,-6.00006e+001 42.9991,-7.6999e+001 19.0013,-1.10021e+001 63.0003,-2.40009e+001 131,-3.90026e+001l100 -2.29978e+001c49.0017,-1.10021e+001 86.0013,-2.60007e+001 113.002,-4.5002e+001 44.9989,-3.39999e+001 67.9999,-8.29985e+001 67.9999,-1.45999e+002 0,-7.89988e+001 -2.90004e+001,-1.36e+002 -8.70012e+001,-1.71e+002 -5.70009e+001,-3.39999e+001 -1.24001e+002,-5.10015e+001 -2.01e+002,-5.10015e+001 -8.9001e+001,0 -1.59001e+002,23.001 -2.08999e+002,67.9999 -5.10015e+001,45.002 -7.60022e+001,107.002 -7.50023e+001,184.001l92.0007 0z"/>
                        <glyph unicode="T" horiz-adv-x="610" d="M598.002 716.997l0 -8.49918e+001 -2.42007e+002 0 0 -6.32005e+002 -9.79957e+001 0 0 632.005 -2.41995e+002 0 0 84.9918 581.998 0z"/>
                        <glyph unicode="Y" horiz-adv-x="666" d="M20.9999 716.997l112.996 0 206.007 -3.43995e+002 205.995 343.995 114 0 -2.71003e+002 -4.27994e+002 0 -2.89003e+002 -9.69917e+001 0 0 289.003 -2.71003e+002 427.994z"/>
                        <glyph unicode="d" horiz-adv-x="556" d="M120 254.999c0,-5.59958e+001 12,-1.03004e+002 35.9999,-1.39996e+002 22.996,-3.80077e+001 61.0037,-5.69998e+001 114,-5.69998e+001 40.9959,0 73.9958,17.9999 100.004,52.9959 26.9999,34.9959 39.992,85.0036 39.992,149.999 0,65.9997 -1.3996e+001,115.003 -4.09959e+001,146.999 -2.69999e+001,31.9959 -5.99998e+001,47.9998 -1.00004e+002,47.9998 -4.39959e+001,0 -7.99957e+001,-1.6996e+001 -1.08e+002,-5.09998e+001 -2.69999e+001,-3.40038e+001 -4.09959e+001,-8.39997e+001 -4.09959e+001,-1.49999e+002zm131.999 277.003c40.9959,0 73.9958,-7.99603e+000 100.996,-2.50038e+001 14.9999,-1.00039e+001 32.9999,-2.69999e+001 53.0077,-5.09998e+001l0 263.999 84.9918 0 0 -7.19997e+002 -7.89918e+001 0 0 73.0036c-2.09999e+001,-3.29999e+001 -4.49998e+001,-5.60077e+001 -7.30036e+001,-7.00037e+001 -2.80038e+001,-1.49999e+001 -5.99998e+001,-2.20039e+001 -9.59996e+001,-2.20039e+001 -5.89958e+001,0 -1.09004e+002,25.0038 -1.51995e+002,74.0076 -4.30038e+001,48.9919 -6.40037e+001,114 -6.40037e+001,194.999 0,76.9958 19.996,142.996 58.9958,197.999 38.9998,55.9958 94.0036,83.9997 166.003,83.9997z"/>
                        <glyph unicode="r" horiz-adv-x="332" d="M67.0037 523.002l82.9957 0 0 -8.99996e+001c7.00391,16.996 23.9999,38.9998 50.9998,63.9919 26.9999,25.0038 56.9998,38.0077 91.9957,38.0077 1.00393,0 4.00392,0 8.00784,-1.00393e+000 3.99211,0 10.996,-9.92122e-001 19.996,-1.99606e+000l0 -9.29996e+001c-4.99604e+000,0.992122 -1.00039e+001,1.99606 -1.3996e+001,1.99606 -5.00785e+000,1.00393 -1.00039e+001,1.00393 -1.49999e+001,1.00393 -4.40077e+001,0 -7.79997e+001,-1.40078e+001 -1.02e+002,-4.30038e+001 -2.30078e+001,-2.89959e+001 -3.50077e+001,-6.10037e+001 -3.50077e+001,-9.79957e+001l0 -3.01003e+002 -8.79918e+001 0 0 523.002z"/>
                        </font>
                        <style type="text/css">
                        <![CDATA[
                            @font-face { font-family:"Helvetica";font-variant:normal;font-weight:normal;src:url("#FontID0") format(svg)}
                            .fil1 {fill:#F0861B}
                            .fil0 {fill:#F5C9A3}
                            .fil2 {fill:#FCE0C7}
                            .fnt0 {font-weight:normal;font-size:846.67px;font-family:'Helvetica'}
                            .fnt1 {font-weight:normal;font-size:3200.3px;font-family:'Helvetica'}
                        ]]>
                        </style>
                            <mask id="id0">
                        <radialGradient id="id1" gradientUnits="userSpaceOnUse" cx="10726.52" cy="12690.08" r="7781.07" fx="10726.52" fy="12690.08">
                        <stop offset="0" style="stop-opacity:1; stop-color:white"/>
                        <stop offset="1" style="stop-opacity:0; stop-color:white"/>
                        </radialGradient>
                            <rect style="fill:url(#id1)" x="3468.59" y="11372.87" width="3400.41" height="2578.3"/>
                            </mask>
                            <mask id="id2">
                        <radialGradient id="id3" gradientUnits="userSpaceOnUse" cx="10726.52" cy="12690.08" r="7781.07" fx="10726.52" fy="12690.08">
                        <stop offset="0" style="stop-opacity:1; stop-color:white"/>
                        <stop offset="1" style="stop-opacity:0; stop-color:white"/>
                        </radialGradient>
                            <rect style="fill:url(#id3)" x="11333.01" y="11372.87" width="3400.41" height="2578.3"/>
                            </mask>
                            <mask id="id4">
                        <radialGradient id="id5" gradientUnits="userSpaceOnUse" cx="10693.41" cy="12690.08" r="7781.07" fx="10693.41" fy="12690.08">
                        <stop offset="0" style="stop-opacity:1; stop-color:white"/>
                        <stop offset="1" style="stop-opacity:0; stop-color:white"/>
                        </radialGradient>
                            <rect style="fill:url(#id5)" x="7499.33" y="12530.56" width="3227.19" height="1455.53"/>
                            </mask>
                            <mask id="id6">
                        <radialGradient id="id7" gradientUnits="userSpaceOnUse" cx="-38915.24" cy="20722.87" r="7781.07" fx="-38915.24" fy="20722.87">
                        <stop offset="0" style="stop-opacity:1; stop-color:white"/>
                        <stop offset="1" style="stop-opacity:0; stop-color:white"/>
                        </radialGradient>
                            <rect style="fill:url(#id7)" x="7868.89" y="11388.93" width="2824.25" height="349.53"/>
                            </mask>
                            <mask id="id8">
                        <radialGradient id="id9" gradientUnits="userSpaceOnUse" cx="7555.54" cy="12690.08" r="7781.07" fx="7555.54" fy="12690.08">
                        <stop offset="0" style="stop-opacity:1; stop-color:white"/>
                        <stop offset="1" style="stop-opacity:0; stop-color:white"/>
                        </radialGradient>
                            <rect style="fill:url(#id9)" x="15336.57" y="11342.6" width="3170.98" height="2643.15"/>
                            </mask>
                        </defs>
                        <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"/>
                        <g id="_105553374375168">
                        <g>
                            <path class="fil0" d="M3468.59 11372.87l2801.11 0c633.88,85.88 829.29,903.25 270.57,1289.15 558.72,385.9 363.31,1203.27 -270.57,1289.15l-2801.11 0 0 -1289.15 0 -1289.15zm276.39 276.39l0 855.18 2571.74 0c245.72,-281.87 160.12,-783.8 -185.7,-855.18l-2386.04 0zm0 2025.52l0 -890.77 2563.95 0c244.97,293.6 159.63,816.42 -185.14,890.77l-2378.81 0z"/>
                            <path class="fil0" d="M11333.01 11372.87l2801.11 0c633.88,85.88 829.29,903.25 270.57,1289.15 558.72,385.9 363.31,1203.27 -270.57,1289.15l-2801.11 0 0 -1289.15 0 -157.58 276.39 0 313.6 0 2258.14 0c245.72,-281.87 160.12,-783.8 -185.7,-855.18l-2386.04 0 -276.39 0 0 -276.39zm276.39 2301.91l0 -890.77 2563.95 0c244.97,293.6 159.63,816.42 -185.14,890.77l-2378.81 0z"/>
                            <path class="fil0" d="M7532.44 12530.56l3194.08 0 0 319.04 -2889.17 24.55c25.16,579.55 447.52,731.15 596.36,764.84l2292.81 0 0 347.1 -2359.7 0c-593.3,-91.55 -987.35,-623.06 -834.38,-1455.53z"/>
                            <path class="fil0" d="M8498.06 11388.93c-354.01,23.76 -536.16,157.99 -629.17,349.53l2824.25 0 0 -349.53 -2195.08 0z"/>
                            <path class="fil0" d="M18507.55 11342.6l-317.16 0 0 962c-58.05,266.74 -237.72,449.29 -565.78,529.14l-702.55 0 -702.55 0c-245.62,-59.78 -408.06,-177.15 -498.55,-344.3l-359.65 0c71.62,352.78 420.34,661.59 788.11,691.66l601.23 0 0 804.65 343.06 0 0 -804.65 600.99 0c405.89,-33.19 788.58,-405.9 801.16,-802.52l11.69 -1035.98zm-2853.82 387.5l0 -387.5 -317.16 0 4.37 387.5 312.79 0z"/>
                        </g>
                        <g>
                            <path class="fil1" style="mask:url(#id0)" d="M3468.59 11372.87l2801.11 0c633.88,85.88 829.29,903.25 270.57,1289.15 558.72,385.9 363.31,1203.27 -270.57,1289.15l-2801.11 0 0 -1289.15 0 -1289.15zm276.39 276.39l0 855.18 2571.74 0c245.72,-281.87 160.12,-783.8 -185.7,-855.18l-2386.04 0zm0 2025.52l0 -890.77 2563.95 0c244.97,293.6 159.63,816.42 -185.14,890.77l-2378.81 0z"/>
                            <path class="fil1" style="mask:url(#id2)" d="M11333.01 11372.87l2801.11 0c633.88,85.88 829.29,903.25 270.57,1289.15 558.72,385.9 363.31,1203.27 -270.57,1289.15l-2801.11 0 0 -1289.15 0 -157.58 276.39 0 313.6 0 2258.14 0c245.72,-281.87 160.12,-783.8 -185.7,-855.18l-2386.04 0 -276.39 0 0 -276.39zm276.39 2301.91l0 -890.77 2563.95 0c244.97,293.6 159.63,816.42 -185.14,890.77l-2378.81 0z"/>
                            <path class="fil1" style="mask:url(#id4)" d="M7532.44 12530.56l3194.08 0 0 319.04 -2889.17 24.55c25.16,579.55 447.52,731.15 596.36,764.84l2292.81 0 0 347.1 -2359.7 0c-593.3,-91.55 -987.35,-623.06 -834.38,-1455.53z"/>
                            <path class="fil1" style="mask:url(#id6)" d="M8498.06 11388.93c-354.01,23.76 -536.16,157.99 -629.17,349.53l2824.25 0 0 -349.53 -2195.08 0z"/>
                            <path class="fil1" style="mask:url(#id8)" d="M18507.55 11342.6l-317.16 0 0 962c-58.05,266.74 -237.72,449.29 -565.78,529.14l-702.55 0 -702.55 0c-245.62,-59.78 -408.06,-177.15 -498.55,-344.3l-359.65 0c71.62,352.78 420.34,661.59 788.11,691.66l601.23 0 0 804.65 343.06 0 0 -804.65 600.99 0c405.89,-33.19 788.58,-405.9 801.16,-802.52l11.69 -1035.98zm-2853.82 387.5l0 -387.5 -317.16 0 4.37 387.5 312.79 0z"/>
                        </g>
                        <text x="8031.21" y="15629.56"  class="fil2 fnt0">B Y d r . T A T A</text>
                        <text x="5227.33" y="19026.02"  class="fil2 fnt1">BEKASI</text>
                        </g>
                        </g>
                        </svg>
                </div>
            </div>
        </div>
    </body>
</html>
