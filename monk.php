<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML Generator - Global Campus of Human Rights</title>
    <base href="https://gchumanrights.org/">
    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    <meta name="description" content="This simple tool lets you easily paste a shareable link from gdrive, YouTube or Facebook and obtain the code to be used on open edX, or on GC website.">
    <meta name="keywords" content="HTML, Code Genrator">
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
            <h1>HTML Code Generator for Gdrive, YouTube, Facebook</h1>

            <p class="margin_bottom_20">This simple tool lets you easily paste a shareable link from gdrive, YouTube or Facebook and obtain the code to be used on open edX, or on GC website.</p>

            <form action="monk/monk.php" method="post">
                <div class="formbody">
                    <div class="widget widget-text form_left mandatory">
                        <label for="ctrl_6205" class="form_left mandatory">Paste here your gdrive, youtube or facebook link:</label> <input type="text" name="url_input" id="val1" class="text form_left" placeholder="Paste your link">
                    </div>

                    <div class="clear"></div>

                    <div class="widget widget-text form_left mandatory">
                        <label for="ctrl_6205" class="form_left mandatory">Choose the type of content based on the platform and kind of file:</label> <select name="link_type" id="link_type">
                            <option value="portrait2">
                                Gdrive - Single File - Portrait
                            </option>

                            <option value="landscape">
                                Gdrive - Single File - Landscape
                            </option>

                            <option value="gridview">
                                Gdrive - Single Folder - Grid View
                            </option>

                            <option value="detailview">
                                Gdrive - Single Folder - Details View
                            </option>

                            <option value="browsable">
                                Gdrive - Browsable Folders
                            </option>

                            <option value="image">
                                Gdrive - Image
                            </option>
                            <option value="yt-video">
                                Youtube - Video
                            </option>
                            <option value="fb-video">
                                Facebook - Video
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
                        echo "<p class=\"margin_bottom_40\"></p><h1>Your Code is just a copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html =  "<div class=\"box_vertical_a4_container\"><iframe class=\"box_vertical_a4\" src=\"https://drive.google.com/file/d/" .$url_id . "/preview\"></iframe></div>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;
                        break;


                    
                    case "landscape":
                        echo "<p class=\"margin_bottom_40\"></p><h1>Your Code is just a copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html =  "<div class=\"box_horizontal_a4_container\"><iframe class=\"box_horizontal_a4\" src=\"https://drive.google.com/file/d/" .$url_id . "/preview\"></iframe></div>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;

                        break;
                        
                    case "gridview":
                        echo "<p class=\"margin_bottom_40\"></p><h1>Your Code is just a copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html =  "<iframe src=\"https://drive.google.com/embeddedfolderview?id=" .$url_id . "#grid\" style=\"width:100%; height:600px; border:0;\"></iframe>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;

                        break;
                        
                    case "detailview":
                        echo "<p class=\"margin_bottom_40\"></p><h1>Your Code is just a copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html =  "<iframe src=\"https://drive.google.com/embeddedfolderview?id=" .$url_id . "#list\" style=\"width:100%; height:600px; border:0;\"></iframe>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;
                        break;

                    case "browsable":
                        echo "<p class=\"margin_bottom_40\"></p><h1>Your Code is just a copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html ="<div class=\"box_horizontal_a4_container\"><iframe class=\"box_horizontal_a4\" src=\"https://eiuc.org/edxtools/z_gdrive_viewer.php?ID=" .$url_id .  "\"></iframe></div>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;
                        break;
                        
                    case "image":
                        echo "<p class=\"margin_bottom_40\"></p><h1>Your Code is just a copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html = "<img src=\"https://drive.google.com/uc?export=view&id=" .$url_id .  "\" alt=\"image_description\" />";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;
                        break;

                    case "yt-video":
                        
                        function get_youtube_id_from_url($url)  {
                            preg_match('/(http(s|):|)\/\/(www\.|)yout(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $results);
                            return $results[6];
                        }

                        $url_id = get_youtube_id_from_url ($input_url);
                        echo "<p class=\"margin_bottom_40\"></p><h1>Your Code is just a copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html = "<div class=\"video169_container\"><iframe class=\"video169\" src=\"https://www.youtube.com/embed/" .$url_id .  "\" frameborder=\"0\" allowfullscreen=\"\"></iframe></div>";
                        echo htmlspecialchars($output_html);
                        echo "</textarea>";
                        echo "<div class=\"submit_container submit button button--aylen button_submit button--aylen_submit no_margin_bottom\"> <input type=\"submit\" class=\"submit submit button button--aylen button_submit button--aylen_submit no_margin_bottom\" onclick=\"copy()\" value=\"COPY\"></button></div>";
                        echo "<p class=\"margin_bottom_20\">&nbsp;</p>
                             <br><br><h1> Preview</h1>";
                        echo $output_html;
                        break;

                    case "fb-video":
                        $url_id = substr($input_url,strrpos(rtrim($input_url,'/'),'/')+1,-1);
                        echo "<p class=\"margin_bottom_40\"></p><h1>Your Code is just a copy/paste away</h1><div class=\"widget widget-textarea form_left \"><textarea rows=\"6\" cols=\"40\"id=\"textarea\">";
                        $output_html = "<div class=\"video169_container\"><iframe class=\"video169\" src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fgchumanrights%2Fvideos%2F" .$url_id .  "%2F&show_text=0&width=560\" frameborder=\"0\" allowfullscreen=\"\"></iframe></div>";
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