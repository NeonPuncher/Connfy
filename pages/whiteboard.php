<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Whiteboard</title>
        <link rel="stylesheet" href="/css/whiteboard.css" type="text/css">
        <link rel="stylesheet" href="/css/mediastyle.css" type="text/css">
        <script src="https://cdn.jsdelivr.net/npm/p5@1.3.1/lib/p5.js"></script>
        <script src="/lib/p5/addons/p5.speech.js"></script>
    </head>
    <body onload="LoadDivs()">
        <div class="header">
            <header>
              <img class="arrow" src="/images/Arrow-left.png"> 
              <div class="line"></div>
            </header>
        </div>
        <canvas id="canvas" class="canvas"></canvas>
        <div class="overlay" id="overlay">
            <div class="overlayHeader"><h2>Folder 1:</h2></div>
            <div class="folderContent">
                <h4 class="folderContentHeader">Note 1:</h4>
                <p class="folderContentNote">Epic veel tekst waar veel in gaat staan uiteindelijk omdat ik zenuwachtig ben en niet weet wat ik hier moet gaan zetten.</p>
                <h4 class="folderContentHeader">Note 2:</h4>
                <p class="folderContentNote">Epic veel tekst waar veel in gaat staan uiteindelijk omdat ik zenuwachtig ben en niet weet wat ik hier moet gaan zetten.</p>
                <h4 class="folderContentHeader">Picture 1:</h4>
                <img src="/images/FeatureMatrix.png" style="width: 100%;">
                <h4 class="folderContentHeader">Note 3:</h4>
                <p class="folderContentNote">Epic veel tekst waar veel in gaat staan uiteindelijk omdat ik zenuwachtig ben en niet weet wat ik hier moet gaan zetten.</p>
            </div>
        </div>
        <div id="div1" class="note" ><textarea>Select text in this field</textarea></div>
        <div id="div2" class="note"><textarea>Select text in this field</textarea></div>
        <div id="div3" class="note"><textarea id="myArea">Select all this text in this field</textarea></div>
        <div id="div4" class="note">
            <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
            <p><img id="output"/></p>
        </div>
        <div id="div5" class="note"><textarea id="myArea">Mark this text</textarea></div>
        <div id="div6" class="folder" onclick="folderActive()">
            <img src="/images/icons/FolderIcon.png" class="folderIcon">
            <h3>Folder</h3>
        </div>
        <div id="mydivheader" class="note"><h3>Marked Text:</h3></div>

        <img src="/images/icons/NoteIcon.png" class="Icon" onclick="createNote() ,LoadDivs()">
        <img src="/images/icons/DrawIcon.png" class="Icon" id="drawIcon" onclick="activateDraw()">
        <label for="file" style="cursor: pointer;"><img src="/images/icons/ImageIcon.png" class="Icon"></label>
        <img src="/images/icons/markerIcon.png" class="Icon" onclick="getSelectionText()">

        <script type="module" src="/js/sketch_knop_board.js"></script>
        <script type="text/javascript" src="/js/moveDiv.js"></script>
        <script type="text/javascript" src="/js/createNote.js"></script>
        <script type="text/javascript" src="/js/loadImage.js"></script>
        <script type="text/javascript" src="/js/selection.js"></script>
        <script type="text/javascript" src="/js/folder.js"></script>
        <script type="text/javascript" src="/js/draw.js"></script>
    </body>
</html>