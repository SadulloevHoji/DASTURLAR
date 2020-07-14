<html>
<head>
    <title>The jQuery Example</title>
    <script type="text/javascript"
            src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <script type="text/javascript"
            src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
    </script>

    <script type="text/javascript" language="javascript">

        $(document).ready(function () {

            $("#hide").click(function () {
                $("#devices").toggle("slide", {direction: "right"}, 1000);
            });



        });

    </script>

    <style>
        p {
            background-color: #bca;
            width: 200px;
            border: 1px solid green;
        }

        div {
            width: 100px;
            height: 100px;
            background: red;
        }

        #handle {
            position: absolute;
            right: 0px;
            top: 47%;
            z-index: 999;
            width: auto;
            height: auto;
            background: #b90606;
            color: #e5e512;
            writing-mode: vertical-rl;
            text-orientation: mixed;
            text-align: center;
            padding: 20px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            font-size: 1.4em;
            font-weight: bolder;
        }
        #devices {
            background: #fff;
            text-align: center;
            width: 100px;
            border: 1px solid #aaa;
            position: absolute;
            overflow: scroll;
            right: 0px;
            top: 84px;
            z-index: 999;
            border-top: 0px;
            border-bottom: 0px;
            border-right: 0px;
            display: none;
        }
    </style>
</head>

<body>
<p>Click on any of the buttons</p>

<button id="hide"> Hide</button>
<button id="show"> Show</button>

<div class="target"></div>
<div id="handle" style="display: block;">ORDER</div>
<div id="devices" style="height: 450px; display: block;">
    <div class="preview">
        <a href="javascript:void(0);"><img id="desktop_preview" style="margin-top:40px; width:60px; clear:both" src="/images/desktop_icon.png" alt="Desktop Preview"></a>
        <div style="font-size: 12px; color:#545454; margin-bottom: 20px;border-bottom:1px dotted #ccc; padding-bottom:15px;">Desktop<br>Preview</div>
    </div>
    <div class="preview">
        <a href="javascript:void(0);"><img id="portrait_phone_preview" style="margin-top:10px; width:25px;" src="/images/phone_portrait_icon.png" alt="Portrait Phone Preview"></a><br>
        <div style="font-size: 12px; color:#545454; margin-bottom: 20px;border-bottom:1px dotted #ccc; padding-bottom:15px;">Mobile<br>320x568</div>
    </div>
    <div class="preview">
        <a href="javascript:void(0);"><img id="landscape_phone_preview" style="margin-top:10px; width:40px;" src="/images/phone_landscape_icon.png" alt="Landscape Phone Preview"></a><br>
        <div style="font-size: 12px; color:#545454; margin-bottom: 20px;border-bottom:1px dotted #ccc; padding-bottom:15px;">Mobile<br>568x320</div>
    </div>
    <div class="preview">
        <a href="javascript:void(0);"><img id="portrait_pad_preview" style="margin-top:10px; width:35px;" src="/images/ipad_portrait_icon.png" alt="Portrait Pad Preview"></a><br>
        <div style="font-size: 12px; color:#545454; margin-bottom: 20px;border-bottom:1px dotted #ccc; padding-bottom:15px;">Tablet<br>768x1024</div>
    </div>
    <div class="preview">
        <a href="javascript:void(0);"><img id="landscape_pad_preview" style="margin-top:10px; width:50px;" src="/images/ipad_landscape_icon.png" alt="Landscape Pad Preview"></a>
        <div style="font-size: 12px; color:#545454; margin-bottom: 20px;border-bottom:0px; padding-bottom:15px;">Tablet<br>1024x768</div>
    </div>
</div>
</body>
</html>