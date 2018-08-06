<script>
    $('#table1').DataTable({
        "dom": '<"toolbar tool1">rtip',
        info: false,
        paging: false,
        responsive: true,
    });
    $("div.tool1").html('<h5 class="zero-m">Info table</h5>');
    $('#table2').DataTable({
        "dom": '<"toolbar tool2"><"clear-filter">frtip',
        info: false,
        paging: false,
        responsive: true,
        "oLanguage": {"sSearch": ""}
    });
    $("div.tool2").html('<h5 class="zero-m">Danger table</h5>');
    $('.dataTables_filter input').attr("placeholder", "Search");
    $('#table3').DataTable({
        info: false,
        paging: false,
        filter: false,
        responsive: true
    });
    $('#map').vectorMap({
        map: 'world_en',
        backgroundColor: null,
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#666666',
        enableZoom: true,
        showTooltip: true,
        values: sample_data,
        scaleColors: ['#d1e2f5', '#0f486f'],
        normalizeFunction: 'polynomial'
    });
</script>