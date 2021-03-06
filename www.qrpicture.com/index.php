<?php

// import site name
require('config.php');

?><!DOCTYPE HTML>
<html>
<!--
 *  This file is part of qrpicture, photo realistic QR-codes.
 *  Copyright (C) 2007, xyzzy@rockingship.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published
 *  by the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <https://www.gnu.org/licenses/>.
-->
<head>
	<meta charset="utf-8">
	<meta name="description" content="Create photo, image and colour realistic QR codes"/>
	<link rel="shortcut icon" href="favicon.ico"/>
	<link href="qrpicture.css" rel="stylesheet" type="text/css"/>
	<title><?php echo $sitename ?></title>
	<script src="MooTools-Core-1.6.0.js" type="text/javascript"></script>
	<script src="MooTools-More-1.6.0.js" type="text/javascript"></script>
	<script src="qrpicture.js" type="text/javascript"></script>
</head>

<body>
<div id="wrapper">
	<div id="head" class="headtail">
		<div class="headtail-left"><img src="assets/qrSpiral.anim.col.210x210.gif" alt="example"/></div>
		<div class="headtail-right"><img src="assets/qrAwesome.anim.col.210x210.gif" alt="example"/></div>
		<div class="headtail-middle">
			<div>
				<p id="head1"><?php echo $sitename ?></p>
				<p id="head2">Picture to QR-code converter</p>
			</div>
		</div>
	</div>
	<div id="main">
		<div class="main-middle">
			<form id="qrForm" action="#">
				<div class="tabPane">
					<ul class="tabs">
						<li class="button active">1: Image</li>
						<li class="button">2: Outline</li>
						<li class="button">3: Clip</li>
						<li class="button">4: Text</li>
						<li class="button">5: Create</li>
					</ul>
				</div>
				<div class="mainPane">
					<div class="contentViewport">
						<div class="qrContentSlider">
							<div id="step1" class="contentPane">
								<p><b>Select your image</b></p>
								<ul>
									<li>will be resized to 93x93 pixels</li>
									<li>will be blurred and dithered just as the preview</li>
									<li>you can clip/size the preview</li>
									<li>supported formats JPG/PNG/GIF</li>
									<li>animations not supported (yet)</li>
								</ul>
								<input type="file" onchange="window.clip.onFileUpload(event)" name="files[]" id="qrlogo_files" size="50">
							</div>
							<div id="step2" class="contentPane">
								<p><b>Select outline</b></p>
								<p id="outlineOverview">
									<img id="qrOutline0" class="outlineImage" src="assets/outline0-97x97.png" align="absmiddle" onclick="clip.onSetOutline(event,0)" alt="round"/>
									<img id="qrOutline1" class="outlineImage" src="assets/outline1-97x97.png" align="absmiddle" onclick="clip.onSetOutline(event,1)" alt="corners"/>
									<img id="qrOutline2" class="outlineImage" src="assets/outline2-97x97.png" align="absmiddle" onclick="clip.onSetOutline(event,2)" alt="horizontal"/>
									<img id="qrOutline3" class="outlineImage" src="assets/outline3-97x97.png" align="absmiddle" onclick="clip.onSetOutline(event,3)" alt="vertical"/>
								</p>
							</div>
							<div id="step3" class="contentPane">
								<p><b>Position and size clip rectangle</b></p>
								<div id="qrPreview">
									<div id="qrCanvasWrapper"> <!-- somehow the height of parent of canvas gets modified. Add a isolation layer -->
										<canvas id="qrCanvas" height="90%"></canvas>
										<div id="qrDraggables">
											<canvas id="qrDrag" class="qrDragView" style="cursor: move; height: 16px;"></canvas>
											<div class="qrDragThumb" style="cursor: nw-resize"></div>
											<div class="qrDragThumb" style="cursor: n-resize"></div>
											<div class="qrDragThumb" style="cursor: ne-resize"></div>
											<div class="qrDragThumb" style="cursor: w-resize"></div>
											<div class="qrDragThumb" style="cursor: e-resize"></div>
											<div class="qrDragThumb" style="cursor: sw-resize"></div>
											<div class="qrDragThumb" style="cursor: s-resize"></div>
											<div class="qrDragThumb" style="cursor: se-resize"></div>
										</div>
									</div>
								</div>
								<div class="buttonWrapper">
									<button type="button" class="button" onclick="return window.tabs.nextSlide()">Next</button>
								</div>
							</div>
							<div id="step4" class="contentPane">
								<p><b>Your text/message</b></p>
								<ul>
									<li>maximum 100 characters</b></li>
									<li>text can also be a valid web address</b></li>
									<li>shorter text gives better dither quality</li>
									<li>you need to add text or your QR might not scan</li>
								</ul>
								<div class="textareaWrapper">
									<textarea id="qrText" maxlength="100" cols="50" rows="4">https://www.QRpicture.com</textarea>
								</div>
								<div class="buttonWrapper">
									<button type="button" class="button" onclick="return window.tabs.nextSlide()">Next</button>
								</div>
							</div>
							<div id="step5" class="contentPane">
								<p><b>Choose what to create:</b></p>

								<ul>
									<li>please be patient, generator has a queue</li>
									<li>right-click/long-press to save</li>
									<li>the white border size is specification mandatory</li>
								</ul>

								<div class="radioWrapper">
									<label for="optNumColour2">
										<input type="radio" name="optNumColour" id="optNumColour2" value="2"/><span class="checkmark"></span>
										Black/White
									</label>
								</div>
								<div class="radioWrapper">
									<label for="optNumColour64">
										<input type="radio" name="optNumColour" id="optNumColour64" value="64" checked="checked"/><span class="checkmark"></span>
										Colour
									</label>
								</div>

								<div class="buttonWrapper">
									<button type="button" class="button" id="qrGenerateButton" onclick="window.clip.onGenerate(event)" disabled="disabled">Generate (submit to server)</button>
								</div>

								<div id="qrInfo"></div>
								<div id="qrResult"></div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div id="tail" class="headtail">
		<div class="headtail-left"><img src="assets/eVpdGC-186x186.png" alt="example"/></div>
		<div class="headtail-right"><img src="assets/p2G4MC-186x186.png" alt="example"/></div>
		<div class="headtail-middle">
			<div>
				<p id="tail1">Sources of this site can be found <a href="https://github.com/xyzzy/qrpicture" target="_blank">https://github.com/xyzzy/qrpicture</a>.</p>
				<p id="tail2">This service is available in the hope that it will be useful, but without any warranty;
					without even the implied warranty of merchantability or fitness for a particular purpose.</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>
