</html>

<ul class="mfb-component--br mfb-zoomin" data-mfb-toggle="click" style="display: block;">
    <li class="mfb-component__wrap">

        <a href="#" class="mfb-component__button--main">
            <i class="mfb-component__main-icon--resting fas fa-plus"></i>
            <i class="mfb-component__main-icon--active fas fa-times"></i>
        </a>

        <ul class="mfb-component__list">

            <li class="floating-button">
                <a href="#" data-mfb-label="เปิดไมโครโฟน" class="mfb-component__button--child microphone">
                    <i class="mfb-component__child-icon fas fa-microphone-slash"></i>
                </a>
            </li>

        </ul>
    </li>
</ul>


<audio controls id="tts-audio" hidden></audio>
<img id="imgs" src="" alt="" hidden>


<?php include_once("MainJS.php"); ?>
<script>
    var statusPhoto = '<?php if (isset($photo)) echo $photo;
                        else echo null; ?>';
</script>

<script src="../layout/LayoutFooter.js"></script>