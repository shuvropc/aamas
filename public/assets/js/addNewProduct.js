$("#addnewdetails").click(function () {


    var newRow=" <div class=\"row\">\n" +
        "\n" +
        "                                                    <div class=\"col-md-4\">\n" +
        "                                                        <div class=\"form-group\">\n" +
        "                                                            <label class=\"control-label mb-10\">Size</label>\n" +
        "                                                            <div class=\"input-group\">\n" +
        "                                                                <div class=\"input-group-addon\"><i class=\"ti-cut\"></i></div>\n" +
        "                                                                <input type=\"text\" class=\"form-control\" id=\"exampleInputuname\" placeholder=\"%\">\n" +
        "                                                            </div>\n" +
        "                                                        </div>\n" +
        "                                                    </div>\n" +
        "\n" +
        "\n" +
        "                                                    <div class=\"col-md-4\">\n" +
        "                                                        <div class=\"form-group\">\n" +
        "                                                            <label class=\"control-label mb-10\">Color</label>\n" +
        "                                                            <div class=\"input-group\">\n" +
        "                                                                <div class=\"input-group-addon\"><i class=\"ti-cut\"></i></div>\n" +
        "                                                                <input type=\"text\" class=\"form-control\" id=\"exampleInputuname\" placeholder=\"%\">\n" +
        "                                                            </div>\n" +
        "                                                        </div>\n" +
        "                                                    </div>\n" +
        "\n" +
        "\n" +
        "                                                    <div class=\"col-md-4\">\n" +
        "                                                        <div class=\"form-group\">\n" +
        "                                                            <label class=\"control-label mb-10\">Quatity</label>\n" +
        "                                                            <div class=\"input-group\">\n" +
        "                                                                <div class=\"input-group-addon\"><i class=\"ti-cut\"></i></div>\n" +
        "                                                                <input type=\"text\" class=\"form-control\" id=\"exampleInputuname\" placeholder=\"%\">\n" +
        "                                                            </div>\n" +
        "                                                        </div>\n" +
        "                                                    </div>\n" +
        "\n" +
        "                                                </div>";


    var size = $('#size').val();
    var color = $('#color').val();
    var quantity = $('#quantity').val();

    var detailsRow =  "<tr>\n" +
        "                                                <td>"+size+"</td>\n" +
        "                                                <td>"+color+"</td>\n" +
        "                                                <td>"+quantity+"</td>\n" +
        "                                            </tr>";

    $.get("http://localhost:8000/vendor/adddetail/"+size+"/"+color+"/"+quantity+"", function(data, status){
        $("#details").append(detailsRow);
    });

    return false;

});

function addCategory() {

        var newRow=" <div class=\"row\">\n" +
            "\n" +
            "                                                    <div class=\"col-md-4\">\n" +
            "                                                        <div class=\"form-group\">\n" +
            "                                                            <label class=\"control-label mb-10\">Category Name</label>\n" +
            "                                                            <div class=\"input-group\">\n" +
            "                                                                <div class=\"input-group-addon\"><i class=\"ti-cut\"></i></div>\n" +
            "                                                                <input type=\"text\" class=\"form-control\" id=\"exampleInputuname\" placeholder=\"\">\n" +
            "                                                            </div>\n" +

            "                                                        </div>\n" +
            "                                                    </div>\n" +
            "\n" +
            "                                                    <button type='button' id='saveCategory' onclick='sendCategory()'>Save</button> |"+
            "                                                    <button type='button' id='categoryCancel' onclick='removeCategoryHtml()' type='button'>Cancel</button>"+
            "\n" +
            "                                                </div>";

        $("#newCategory").html(newRow);

        return false;

}





function removeCategoryHtml() {
        $("#newCategory").remove();
}

function sendCategory() {
    var categoryName = $('#exampleInputuname').val();
    $("#category").append("<option selected value=\""+categoryName+"\">"+categoryName+"</option>");
    $("#newCategory").remove();
}



