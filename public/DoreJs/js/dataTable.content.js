$("#dataTable").dataTable().fnDestroy();
$('#dataTable').dataTable({
    "pageLength": 25,
    "language": {
        searchPlaceholder: "جستجو",
        "infoEmpty": "هیچ داده ای وجود ندارد",
        "sSearch": "",
        "sInfoEmpty": "نمایش 0 تا 0 از 0 رکورد",
        "sInfoFiltered": "(فیلتر شده از _MAX_ رکورد)",
        "sInfoPostFix": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "در حال بارگزاری...",
        "sProcessing": "در حال پردازش...",
        "sZeroRecords": "رکوردی با این مشخصات پیدا نشد",
        "sLengthMenu": "نمایش _MENU_ رکورد",
        "sInfo": "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
        "oPaginate": {
            "sFirst": "ابتدا",
            "sLast": "انتها",
            "sNext": "بعدی",
            "sPrevious": "قبلی"
        },
        "oAria": {
            "sSortAscending": ": فعال سازی نمایش به صورت صعودی",
            "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
        }
    }
});
