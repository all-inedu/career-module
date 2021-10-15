<ul class="list-group rounded-0" id="sidebar-list">
    <li class="list-group-item <?php echo e(Request::is('data-scientist/1') ? 'active' : ''); ?>"">
        <a class=" sidebar-elements" id="part-0" href="<?php echo e(url('data-scientist/1')); ?>">Part 1 <i class=""
            id="iconPart1"></i></a>
    </li>
    <li class="list-group-item <?php echo e(Request::is('data-scientist/2') ? 'active' : ''); ?>"><a class="sidebar-elements"
            id="part-1" href="<?php echo e(url('data-scientist/2')); ?>">Part 2</a></li>
    <li class="list-group-item <?php echo e(Request::is('data-scientist/3') ? 'active' : ''); ?>"><a class="sidebar-elements"
            id="part-2" href="<?php echo e(url('data-scientist/3')); ?>">Part 3</a></li>
    <li class="list-group-item <?php echo e(Request::is('data-scientist/4') ? 'active' : ''); ?>"><a class="sidebar-elements"
            id="part-3" href="<?php echo e(url('data-scientist/4')); ?>">Part 4</a></li>
    <li class="list-group-item <?php echo e(Request::is('data-scientist/case-studies') ? 'active' : ''); ?>">
        <a class="sidebar-elements" id="part-4" href="<?php echo e(url('data-scientist/case-studies')); ?>">Case Studies</a>
    </li>
    <li class="list-group-item <?php echo e(Request::is('data-scientist/reflection') ? 'active' : ''); ?>">
        <a class="sidebar-elements" id="part-5" href="<?php echo e(url('data-scientist/reflection')); ?>">Reflection</a>
    </li>
    <li class="list-group-item <?php echo e(Request::is('data-scientist/glossary') ? 'active' : ''); ?>">
        <a class="sidebar-elements" id="part-6" href="<?php echo e(url('data-scientist/glossary')); ?>">Glossary</a>
    </li>
    <li class="list-group-item <?php echo e(Request::is('data-scientist/other-resources') ? 'active' : ''); ?>">
        <a class="sidebar-elements" id="part-7" href="<?php echo e(url('data-scientist/other-resources')); ?>">Other
            Resources</a>
    </li>
</ul>
<script>
    var element = $(".sidebar-elements");

    element.mousedown(function() {
        var active = $(".active")
        active.removeClass("active")
        active.addClass("")

        var parent = $(this).parent("li");
        parent.addClass("active")
        parent.removeClass("")
    });

</script>
<?php /**PATH /opt/lampp/htdocs/career-module/resources/views/layout/module/sidebar-ds.blade.php ENDPATH**/ ?>