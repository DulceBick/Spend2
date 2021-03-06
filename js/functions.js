define([], function () {
    return function ($http) {
        this.async = function (type, url, request, params) {
//            console.log("asyncData('" + type + "', '" + url + "', '" + request + "', '" + params + "')");
            var promise = $http({
                url: url,
                method: type,
                data: $.param({'request': request, 'params': params}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (response) {
                return response;
            });
            return promise;
        };

        this.sync = function (url, params) {
           console.log("asyncData('" + url + "', '" + params + "')");
            var myJson = "null";
            console.log(myJson);
            $.ajax({
                type: 'POST',
                async: false,
                cache: false,
                data: params,
                url: url,
                dataType: 'json',
                success: function (data) {
                    myJson = data;
                }
            });
            eval(myJson);
            return myJson;
        };
    };
});
