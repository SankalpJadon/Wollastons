
var a, b, c, e, g, h;
a = 2;
b = 1;
c = 1;
e = 1;
g = 3;
h = 2;
var helloApp = angular.module("helloApp", []);
helloApp.controller("MyCtrl", function ($scope) {
    $scope.car = [
        {'store': 'Huntington Avenue',
            'time': '5/6/2016 10:20:42 AM',
            'product': 'Bagels'},
        {'store': 'Huntington Avenue',
            'time': '5/10/2016 7:35:15 PM',
            'product': 'Muffins'},
        {'store': 'Parker Street',
            'time': '5/18/2016 12:00:45 PM',
            'product': 'Cookies'},
        {'store': 'Huntington Avenue',
            'time': '5/21/2016 1:25:05 PM',
            'product': 'Cakes'},
        {'store': 'Parker Street',
            'time': '5/25/2016 9:08:35 AM',
            'product': 'Bagels'},
    ];
    $scope.addRow = function () {

        var addedTime = new Date().toLocaleString();
        $scope.car.push({'store': $scope.store, 'time': addedTime, 'product': $scope.product});
        if (angular.equals($scope.product, 'Bagels')) {
            a++;
        } else if (angular.equals($scope.product, 'Muffins')) {
            b++;
        } else if (angular.equals($scope.product, 'Cakes')) {
            c++;
        }else if (angular.equals($scope.product, 'Cookies')) {
            e++;
        }
		if (angular.equals($scope.store, 'Huntington Avenue')) {
            g++;
        }else if (angular.equals($scope.store, 'Parker Street')) {
            h++;
        }
		$scope.product = '';
		$scope.store = '';
		registrationFormDisplay();
        piechart();
		piechart2();

    };
    $scope.removeRow = function (time) {
        var index = -1;
        var comArr = eval($scope.car);
        for (var i = 0; i < comArr.length; i++) {
            if (comArr[i].time === time) {
                index = i;
                break;
            }
        }
        var r = confirm("Are You Sure! You Want To Delete This Row?");
        if (r == true) {

            if (angular.equals(comArr[i].product, 'Bagels')) {
                a--;
            } else if (angular.equals(comArr[i].product, 'Muffins')) {
                b--;
            } else if (angular.equals(comArr[i].product, 'Cakes')) {
                c--;
            }else if (angular.equals(comArr[i].product, 'Cookies')) {
                e--;
            }
			if (angular.equals(comArr[i].store, 'Huntington Avenue')) {
            g--;
			}else if (angular.equals(comArr[i].store, 'Parker Street')) {
            h--;
			}
            $scope.car.splice(index, 1);
            piechart();
			piechart2();
        }
    };

    function piechart() {

        $('#container').highcharts({
            chart: {
                type: 'pie',
				backgroundColor: 'rgba(255, 255, 255, 0)'
            },
            title: {
                text: 'Pie Chart for Food Items'
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                pie: {
                    size: 180
                }
            },
            series: [{
                    data: [
                        ['Bagels', a],
                        ['Muffins', b],
                        ['Cakes', c],
                        ['Cookies', e],
                    ]
                }]
        });

    }
	function piechart2() {

        $('#container2').highcharts({
            chart: {
                type: 'pie',
				backgroundColor: 'rgba(255, 255, 255, 0)'
            },
            title: {
                text: 'Pie Chart for Store'
            },
            credits: {
                enabled: false
            },
            plotOptions: {
                pie: {
                    size: 180
                }
            },
            series: [{
                    data: [
                        ['Huntington Avenue', g],
                        ['Parker Street', h]
                    ]
                }]
        });

    }
    piechart();
	piechart2();
});
function registrationFormDisplay() {
    if (document.getElementById("registrationForm").style.display === "none") {
        //if no registration form, then it will create one, if it exists, it will move to the else loop.
        document.getElementById("registrationForm").style.display = "block";
    } else {
        document.getElementById("registrationForm").style.display = "none";
        //this is the div id which is redirected to the called id in the page below.
    }
}

		