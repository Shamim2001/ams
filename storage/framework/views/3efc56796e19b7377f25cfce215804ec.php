<div id="ct-loadding">
    <div class="loading-infinity">
        <!-- <div> <span></span></div>
        <div><span></span></div>
        <div> <span></span></div> -->
        <img src="<?php echo e(asset('assets/frontend/')); ?>/logo.png" alt="" style="height: 50px; width: auto;">
    </div>
</div>

<script>
    setTimeout(function() {
        var element = document.getElementById("ct-loadding");
        element.style.display = "none";
    }, 1000);
</script>
<?php /**PATH C:\laragon\www\panthopoth\resources\views/frontend/components/utils/preloader.blade.php ENDPATH**/ ?>