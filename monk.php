<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gdrive Link Generator - Global Campus of Human Rights</title>
    <base href="https://gchumanrights.org/">
    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="generator" content="Nicola Tonon">
    <meta property="og:image" content="https://gchumanrights.org/files/eiuc/social/globalcampus-home.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="system/themes/eiuc2017/css/component.css">
    <link rel="stylesheet" type="text/css" href="system/themes/eiuc2017/css/style.css">
    <link rel="stylesheet" type="text/css" href="system/themes/eiuc2017/css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700" rel="stylesheet">
    <!--[if lt IE 9]><script src="assets/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script><![endif]-->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
	function copy() {
	    let textarea = document.getElementById("textarea");
	    textarea.select();
	    document.execCommand("copy");
	    }
	</script>
</head>

<body>
    <br>

    <section class="container no_margin_bottom">
        <div class="ce_text description_page_programme block" style="padding-left: 50px;">
            <h1>HTML Code Generator from GDRIVE</h1>

            <p class="margin_bottom_20">This quick tool lets you easily paste a shareable link from gdrive and obtain the code to be used on open edX</p>

            <form action="monk/monk.php" method="post">
                <div class="formbody">
                    <div class="widget widget-text form_left mandatory">
                        <label for="ctrl_6205" class="form_left mandatory">Paste here your gdrive link:</label> <input type="text" name="url_input" id="val1" class="text form_left" placeholder="Paste here the gdrive link">
                    </div>

                    <div class="clear"></div>

                    <div class="widget widget-text form_left mandatory">
                        <label for="ctrl_6205" class="form_left mandatory">Choose what kind of link it is:</label> <select name="link_type" id="link_type">
                            <option value="portrait2">
                                Single File - Portrait
                            </option>

                            <option value="landscape">
                                Single File - Landscape
                            </option>

                            <option value="gridview">
                                Single Folder - Grid View
                            </option>

                            <option value="detailview">
                                Single Folder - Details View
                            </option>

                            <option value="browsable">
                                Browsable Folders
                            </option>

                            <option value="image">
                                Image
                            </option>
                        </select>
                    </div>

                    <div class="clear"></div>

                    <div class="clear">
                        <br>
                        <br>
                    </div>

                    <div class="submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom">
                        <input type="submit" id="ctrl_6266" class="submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom" value="Send" name="send-button">
                    </div>
                </div>
            </form>
            <?php
            if(isset($_POST['send-button'])) {
                $input_url = $_POST["url_input"];
                $url_id  = substr($input_url, strpos($input_url, "open?id=") + 8);
                $final_code = $_POST["link_type"];
            }   
                    
                switch ($final_code){
                    case "portrait2":
                        echo "<h1>Your Code is copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html =  "<div class=\"box_vertical_a4_container\"><iframe class=\"box_vertical_a4\" src=\"https://drive.google.com/file/d/" .$url_id . "/preview\"></iframe></div>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;
                        break;


                    
                    case "landscape":
                        echo "<h1>Your Code is copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html =  "<div class=\"box_horizontal_a4_container\"><iframe class=\"box_horizontal_a4\" src=\"https://drive.google.com/file/d/" .$url_id . "/preview\"></iframe></div>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;

                        break;
                        
                    case "gridview":
                        echo "<h1>Your Code is copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html =  "<iframe src=\"https://drive.google.com/embeddedfolderview?id=" .$url_id . "#grid\" style=\"width:100%; height:600px; border:0;\"></iframe>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;

                        break;
                        
                    case "detailview":
                        echo "<h1>Your Code is copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html =  "<iframe src=\"https://drive.google.com/embeddedfolderview?id=" .$url_id . "#list\" style=\"width:100%; height:600px; border:0;\"></iframe>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;
                        break;

                    case "browsable":
                        echo "<h1>Your Code is copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html ="<div class=\"box_horizontal_a4_container\"><iframe class=\"box_horizontal_a4\" src=\"https://eiuc.org/edxtools/z_gdrive_viewer.php?ID=" .$url_id .  "\"></iframe></div>";
                        //$output_html =  "<iframe src=\"https://drive.google.com/embeddedfolderview?id=" .$url_id . "#list\" style=\"width:100%; height:600px; border:0;\"></iframe>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;
                        break;
                        
                    case "image":
                        echo "<h1>Your Code is copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html = "<img src=\"https://drive.google.com/uc?export=view&id=" .$url_id .  "\" alt=\"image_description\" />";
                        //$output_html =  "<iframe src=\"https://drive.google.com/embeddedfolderview?id=" .$url_id . "#list\" style=\"width:100%; height:600px; border:0;\"></iframe>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;
                        break;
                    
                }
			?>
        </div>
    </section>
</body>
</html>