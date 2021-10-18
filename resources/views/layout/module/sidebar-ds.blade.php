<ul class="list-group rounded-0" id="sidebar-list">
    <li class="list-group-item {{ Request::is('data-scientist/1') ? 'active' : '' }}"">
        <a class="  sidebar-elements" id="part-0" href="{{ url('data-scientist/1') }}">
            Part 1 <i class="" id="iconPart1"></i>
        </a>
    </li>
    <li class="list-group-item {{ Request::is('data-scientist/2') ? 'active' : '' }}">
        <a class="sidebar-elements" id="part-1" href="{{ url('data-scientist/2') }}">
            Part 2 <i class="" id="iconPart3"></i>
        </a>
    </li>
    <li class="list-group-item {{ Request::is('data-scientist/3') ? 'active' : '' }}">
        <a class="sidebar-elements" id="part-2" href="{{ url('data-scientist/3') }}">
            Part 3 <i class="" id="iconPart2"></i>
        </a>
    </li>
    <li class="list-group-item {{ Request::is('data-scientist/4') ? 'active' : '' }}">
        <a class="sidebar-elements" id="part-3" href="{{ url('data-scientist/4') }}">
            Part 4 <i class="" id="iconPart4"></i>
        </a>
    </li>
    <li class="list-group-item {{ Request::is('data-scientist/case-studies') ? 'active' : '' }}">
        <a class="sidebar-elements" id="part-4" href="{{ url('data-scientist/case-studies') }}">
            Case Studies <i class="" id="iconPart5"></i>
        </a>
    </li>
    <li class="list-group-item {{ Request::is('data-scientist/reflection') ? 'active' : '' }}">
        <a class="sidebar-elements" id="part-5" href="{{ url('data-scientist/reflection') }}">
            Reflection <i class="" id="iconPart6"></i>
        </a>
    </li>
    <li class="list-group-item {{ Request::is('data-scientist/glossary') ? 'active' : '' }}">
        <a class="sidebar-elements" id="part-6" href="{{ url('data-scientist/glossary') }}">Glossary</a>
    </li>
    <li class="list-group-item {{ Request::is('data-scientist/other-resources') ? 'active' : '' }}">
        <a class="sidebar-elements" id="part-7" href="{{ url('data-scientist/other-resources') }}">Other
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
