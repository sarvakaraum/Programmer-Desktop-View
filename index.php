<!DOCTYPE html>
<html>
<head>


    <meta
    "Content-type: text/css" charset="http-equiv=" content="text/html; charset=utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <title>Sarvakaraum - Programmer</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css"> -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/jquery-linedtextarea.css" rel="stylesheet">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>

    <!-- important js Files -->
    <script src="assets/js/functions/keywords.js"></script>
    <script src="assets/js/functions/variables.js"></script>

    <!--- ckeditor --->

    <script src="ckeditor/ckeditor.js" type="text/javascript"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Vendor CSS Files -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <link href="assets/img/favicon.png" rel="shortcut icon">


    <!-- text area to editor -->

</head>
<body>

<!-- Image and text -->
<nav class="navbar navbar-light" style="padding-bottom: 20px; padding-right: 800px">
    <a class="navbar-brand" href="#" ><img alt="" class="d-inline-block align-top" height="30" src="assets/img/favicon.png" width="30">&nbsp;Sarvakaraum</a>
</nav>
<!-- ======= IDE Section ======= -->
<section>
    <div>
        <div class="row cspace">
            <div class="col-sm-20">
                <div class="form-group">
                    <form action="compile.php" id="form" method="POST" name="f2">
                        <select class="form-control" name="language"
                                style="background-color:#4eac4e; color:white; align-self: center">
                            <option value="c">C</option>
                        </select>

                        <!-- Code textarea -->

                        <div style="float: left; padding-right: 50px; padding-bottom: 50px;">
                            <input class="btn btn-danger" onclick="reset(),showAlert();"
                                   style="float:right; margin:6px; " type="button"
                                   value="Clear Code">
                            <input class="btn btn-primary" onclick="download()"
                                   style="float:right; margin:6px; " type="button"
                                   value="Download Code">
                            <!-- <label for="txt" style="font-size: 20px; "> &nbsp;Write Your Code&nbsp; </label>-->
                            <button class="labeling" style="width: 100%;">Write Your Code</button>
                            <textarea class="lined" cols="85" id="hide"
                                      rows="19"
                                      style="background-color: #05192d; color:#309e30; font-size: 16px; font-family: 'Poppins', sans-serif; line-height: normal !important;">
                            </textarea>
                            <textarea cols="80" id="txt" name="code" rows="15" style="display: none"></textarea>
                        </div>


                        <!-- Input textarea -->


                        <div style="float: right; padding-bottom: 50px;">
                            <input class="btn btn-danger" onclick="resetinput(),showInputAlert();"
                                   style="float:right; margin:6px; " type="button"
                                   value="Clear Input">
                            <button class="labeling" style="width: 100%;">Give Your Input</button>
                            <!--<h1 class="exercise--title">Write Your Input</h1>-->
                            <textarea class="lined" cols="80" id="input" name="input"
                                      rows="19" style="background-color: #05192d; color:#309e30"></textarea>
                            <input class="btn btn-success" id="st"
                                   style="float:right; margin-left:6px; margin-bottom: 6px; margin-top: 0px;" type="submit"
                                   value="Run Code">
                        </div>


                        <!-- Output textarea -->

<br>
                        <div style="float: bottom;">
                            <button class="labeling" style="width: 100%;">Check Output</button>
                            <textarea class="form-control" cols="90" id='div'
                                      name="output" readonly rows="15"
                                      style="background-color: #05192d; color:#309e30"></textarea><br><br>
                        </div>


                    </form>

                    <!-- All Functions Scripts -->


                    <!-- _____________________________________________functions for editor_________________________________________________________ -->

                    <script>
                        function myFunction() {
                            var element = document.body;
                            element.classList.toggle("dark");
                        }
                    </script>

                    <!-- 1.download function -->
                    <script>
                        function download() {
                            var text = document.getElementById("txt").value;
                            text = text.replace(/\n/g, "\r\n"); // To retain the Line breaks.
                            var blob = new Blob([text], {type: "text/plain"});
                            var anchor = document.createElement("a");
                            anchor.download = "???????????? ?????? ?????????.c";
                            anchor.href = window.URL.createObjectURL(blob);
                            anchor.target = "_blank";
                            anchor.style.display = "none"; // just to be safe!
                            document.body.appendChild(anchor);
                            anchor.click();
                            document.body.removeChild(anchor);
                        }
                    </script>

                    <!-- 2. Data Process -->
                    <script>
                        function addEvent(el, name, func, bool) {
                            if (el.addEventListener)
                                el.addEventListener(name, func, bool);
                            else if (el.attachEvent)
                                el.attachEvent('on' + name, func);
                            else el['on' + name] = func;
                        }

                        addEvent(hide, 'keyup', function (e) {
                            txt.value = e.target.value;
                        }, false);
                    </script>

                    <!--3.Auto Identation -->
                    <script>
                        $("textarea").keydown(function (e) {
                            if (e.which == 9) //ASCII tab
                            {
                                e.preventDefault();
                                var start = this.selectionStart;
                                var end = this.selectionEnd;
                                var v = $(this).val();
                                if (start == end) {
                                    $(this).val(v.slice(0, start) + "    " + v.slice(start));
                                    this.selectionStart = start + 4;
                                    this.selectionEnd = start + 4;
                                    return;
                                }

                                var selectedLines = [];
                                var inSelection = false;
                                var lineNumber = 0;
                                for (var i = 0; i < v.length; i++) {
                                    if (i == start) {
                                        inSelection = true;
                                        selectedLines.push(lineNumber);
                                    }
                                    if (i >= end)
                                        inSelection = false;

                                    if (v[i] == "\n") {
                                        lineNumber++;
                                        if (inSelection)
                                            selectedLines.push(lineNumber);
                                    }
                                }
                                var lines = v.split("\n");
                                for (var i = 0; i < selectedLines.length; i++) {
                                    lines[selectedLines[i]] = "    " + lines[selectedLines[i]];
                                }

                                $(this).val(lines.join("\n"));
                            }
                        });
                        $("textarea").keypress(function (e) {
                            if (e.which == 13) // ASCII newline
                            {
                                setTimeout(function (that) {
                                    var start = that.selectionStart;
                                    var v = $(that).val();
                                    var thisLine = "";
                                    var indentation = 0;
                                    for (var i = start - 2; i >= 0 && v[i] != "\n"; i--) {
                                        thisLine = v[i] + thisLine;
                                    }
                                    for (var i = 0; i < thisLine.length && thisLine[i] == " "; i++) {

                                        indentation++;
                                    }
                                    $(that).val(v.slice(0, start) + " ".repeat(indentation) + v.slice(start));
                                    that.selectionStart = start + indentation;
                                    that.selectionEnd = start + indentation;
                                }, 0.01, this);
                            }
                        });
                    </script>

                    <!--4.clear ffunction -->
                    <script>
                        function reset() {
                            var txt = document.getElementById('txt');
                            if (!txt.value || txt.value != txt.defaultValue) {
                                txt.value = txt.defaultValue;
                            }
                        }
                    </script>

                    <script>
                        function resetinput() {
                            var txt = document.getElementById('input');
                            if (!txt.value || txt.value != txt.defaultValue) {
                                txt.value = txt.defaultValue;
                            }
                        }
                    </script>


                    <!--5.alert ffunction -->
                    <script>
                        function showAlert() {
                            alert("???????????? ?????? ????????? ??????????????? ???????????? ??????????????? ??????????");
                        }
                    </script>

                    <script>
                        function showInputAlert() {
                            alert("???????????? ?????? ??????????????? ??????????????? ???????????? ??????????????? ??????????");
                        }
                    </script>


                    <!-- 6.undo -->
                    <script>
                        $(document).ready(function () {
                            function deployText() {
                                // create an array to store all text in
                                var textArray = [];
                                var textarea = $('textarea');
                                var origValue = textarea.text();
                                textArray.push(origValue); //push original text to array

                                $('button').on('click', function (e) {
                                    textArray.push(textToAdd); //push new text to array
                                    textarea.text(textArray); //apply text to textarea
                                });

                                //if ctrl-z is pressed run function
                                $(document).on('keypress', function (e) {
                                    var zKey = 26;
                                    if (e.ctrlKey && e.which === zKey) {
                                        removePreviousText();
                                    }
                                })

                                //remove last item of array and apply it to textarea
                                function removePreviousText() {
                                    if (textArray.length > 1) {
                                        textArray.pop();
                                        $('textarea').text(textArray);
                                    }
                                }
                            }

                            deployText()
                        })
                    </script>

                    <!-- 7. Line ffunction -->
                    <script>
                        $(function () {
                            $(".lined").linedtextarea(
                                {selectedLine: 1}
                            );
                        });
                    </script>

                    <!-- 8. screenshot ffunction -->



                    <!-- Output ffunction -->
                    <script>
                        //wait for page load to initialize script
                        $(document).ready(function () {
                            //listen for form submission
                            $('form').on('submit', function (e) {
                                //prevent form from submitting and leaving page
                                var textarea = $('#txt');
                                textarea.val(textarea.val().replace(/??????????????????.???/g, "stdio.h")); //stdio.h
                                textarea.val(textarea.val().replace(/????????????????????????/g, "int"));
                                textarea.val(textarea.val().replace(/?????????/g, "string"));
                                textarea.val(textarea.val().replace(/???????????????/g, "include"));
                                textarea.val(textarea.val().replace(/???????????????/g, "main"));
                                textarea.val(textarea.val().replace(/?????????????????????/g, "printf"));
                                textarea.val(textarea.val().replace(/??????????????????/g, "scanf"));
                                textarea.val(textarea.val().replace(/???????????????/g, "include"));
                                textarea.val(textarea.val().replace(/?????????/g, "auto"));
                                textarea.val(textarea.val().replace(/??????????????????/g, "struct"));
                                textarea.val(textarea.val().replace(/???????????????/g, "break"));
                                textarea.val(textarea.val().replace(/????????????/g, "else"));
                                textarea.val(textarea.val().replace(/????????????/g, "long"));
                                textarea.val(textarea.val().replace(/???????????????/g, "switch"));
                                textarea.val(textarea.val().replace(/???????????????/g, "case"));
                                textarea.val(textarea.val().replace(/?????????????????????/g, "register"));
                                textarea.val(textarea.val().replace(/????????????/g, "enum"));
                                textarea.val(textarea.val().replace(/?????????????????????/g, "typedef"));
                                textarea.val(textarea.val().replace(/????????????/g, "char"));
                                textarea.val(textarea.val().replace(/????????????????????????/g, "extern"));
                                textarea.val(textarea.val().replace(/???????????????/g, "return"));
                                textarea.val(textarea.val().replace(/?????????/g, "union"));
                                textarea.val(textarea.val().replace(/????????????/g, "continue"));
                                textarea.val(textarea.val().replace(/?????? ????????????/g, "for"));
                                textarea.val(textarea.val().replace(/?????????????????????/g, "signed"));
                                textarea.val(textarea.val().replace(/???????????????/g, "void"));
                                textarea.val(textarea.val().replace(/????????????/g, "do"));
                                textarea.val(textarea.val().replace(/?????????/g, "if"));
                                textarea.val(textarea.val().replace(/???????????????/g, "static"));
                                textarea.val(textarea.val().replace(/????????????/g, "while"));
                                textarea.val(textarea.val().replace(/?????????/g, "default"));
                                textarea.val(textarea.val().replace(/?????????/g, "goto"));
                                textarea.val(textarea.val().replace(/?????? ???????????? ??????/g, "sizeof"));
                                textarea.val(textarea.val().replace(/?????????????????????????????????/g, "volatile"));
                                textarea.val(textarea.val().replace(/?????????????????????/g, "const"));
                                textarea.val(textarea.val().replace(/???????????????/g, "float"));
                                textarea.val(textarea.val().replace(/?????????/g, "short"));
                                textarea.val(textarea.val().replace(/????????????????????????/g, "unsigned"));
                                textarea.val(textarea.val().replace(/????????????????????????/g, "int"));
                                textarea.val(textarea.val().replace(/???????????????/g, "double"));
                                textarea.val(textarea.val().replace(/???/g, "\b"));
                                textarea.val(textarea.val().replace(/\???/g, "\f"));
                                textarea.val(textarea.val().replace(/\???/g, "\n"));
                                textarea.val(textarea.val().replace(/\???/g, "\r"));
                                textarea.val(textarea.val().replace(/\???/g, "\t"));
                                textarea.val(textarea.val().replace(/\???/g, "\v"));
                                textarea.val(textarea.val().replace(/????????????????????????/g, "int"));
                                textarea.val(textarea.val().replace(/????????????/g, "char"));
                                textarea.val(textarea.val().replace(/???????????????/g, "float"));
                                textarea.val(textarea.val().replace(/???????????????/g, "double"));
                                textarea.val(textarea.val().replace(/????????? ????????????????????????/g, "short int"));
                                textarea.val(textarea.val().replace(/????????????????????????  ????????????????????????/g, "unsigned int"));
                                textarea.val(textarea.val().replace(/???????????? ????????????????????????/g, "long int"));
                                textarea.val(textarea.val().replace(/???????????? ???????????? ????????????????????????/g, "long long int"));
                                textarea.val(textarea.val().replace(/???????????????????????? ???????????? ????????????????????????/g, "unsigned long int"));
                                textarea.val(textarea.val().replace(/???????????????????????? ???????????? ???????????? ????????????????????????/g, "unsigned long long int"));
                                textarea.val(textarea.val().replace(/????????????????????? ????????????/g, "signed char"));
                                textarea.val(textarea.val().replace(/???????????????????????? ????????????/g, "unsigned char"));
                                textarea.val(textarea.val().replace(/???????????? ?????????/g, "long double"));
                                textarea.val(textarea.val().replace(/%???/g, "%d"));
                                e.preventDefault();

                                // AJAX
                                $.ajax({
                                    type: "POST", //type of submit
                                    cache: false, //important or else you might get wrong data returned to you
                                    url: "compile.php", //destination
                                    datatype: "html", //expected data format from process.php
                                    data: $('form').serialize(), //target your form's data and serialize for a POST
                                    success: function (result) { // data is the var which holds the output of your process.php

                                        // locate the div with #result and fill it with returned data from process.php
                                        $('#div').html(result);
                                    }
                                });
                            });
                        });
                    </script>


                </div>
            </div>
        </div>
    </div>
</section><!-- End Compiler Section -->

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/js/jquery-linedtextarea.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


</body>
</html>
