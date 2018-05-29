$("#addnewsize").click(function () {


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

    $("#quantity_input").append(newRow);

});