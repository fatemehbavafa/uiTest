$(".content").height($(window).height() - 300)
function buildJqGrid(grid, colNames, colModel, route, caption, rowNums = 10, dropdownDependencyModel = []) {
    grid.jqGrid({
        url: route,
        datatype: "json",
        colNames: colNames,
        colModel: colModel,
        rownumbers: false,
        rowNum: rowNums,
        gridview: true,
        height: $('.card').height(),
        direction: "rtl",
        rowList: [10, 20, 30, 40, 50],
        pager: '#pager2',
        loadonce: false,
        viewrecords: true,
        caption: caption,
        shrinkToFit: true,
        autowidth: true,
    });
    grid.jqGrid('navGrid', '#pager2', {edit: false, add: false, del: false, search: false})
        .jqGrid('filterToolbar', {
            defaultSearch: 'cn',
            stringResult: false,
            autosearch: true,
            searchOnEnter: true,
        });
    // grid.jqGrid('setGridWidth', $(".card-body").width(), true);
    if(dropdownDependencyModel != '')
        bindEvents(dropdownDependencyModel);
}

function bindEvents(dependencies) {
    $.each(dependencies, function (key, value) {
        $("#gs_grid_"+value[3]).on('change', function () {
            var dependentElement = $("#gs_grid_"+value[2]);
            var parentelementValue = $("#gs_grid_"+value[3]).val();
            var url = value[5];
            url = url.replace(':id', parentelementValue);
            dependentElement.find('option:gt(0)').remove();
            $.get(url).done(function (data) {
                $.each(data, function (index, item) {
                    if (typeof(index) == "string" && typeof(item) == "string") {
                        $(dependentElement).append(
                            $("<option></option>")
                                .text(item)
                                .val(index)
                        );
                    }
                });
            });
        })
    })
}