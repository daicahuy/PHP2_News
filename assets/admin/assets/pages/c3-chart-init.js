!(function (e) {
  "use strict";
  var a = function () {};

  (a.prototype.init = function () {
    c3.generate({
      bindto: "#chart",
      data: {
        columns: [
          ["Desktop", 150, 80, 70, 152, 250, 95],
          ["Mobile", 200, 130, 90, 240, 130, 220],
          ["Tablet", 300, 200, 160, 400, 250, 250],
        ],
        type: "bar",
        colors: { Desktop: "#ff5560", Mobile: "#fcc24c", Tablet: "#508aeb" },
      },
    }),
      c3.generate({
        bindto: "#combine-chart",
        data: {
          columns: [
            ["SonyVaio", 30, 20, 50, 40, 60, 50],
            ["iMacs", 200, 130, 90, 240, 130, 220],
            ["Tablets", 300, 200, 160, 400, 250, 250],
            ["iPhones", 200, 130, 90, 240, 130, 220],
            ["Macbooks", 130, 120, 150, 140, 160, 150],
          ],
          types: {
            SonyVaio: "bar",
            iMacs: "bar",
            Tablets: "spline",
            iPhones: "line",
            Macbooks: "bar",
          },
          colors: {
            SonyVaio: "#fcc24c",
            iMacs: "#508aeb",
            Tablets: "#54cc96",
            iPhones: "#f75285",
            Macbooks: "#78ceff",
          },
          groups: [["SonyVaio", "iMacs"]],
        },
        axis: { x: { type: "categorized" } },
      }),
      c3.generate({
        bindto: "#roated-chart",
        data: {
          columns: [
            ["Revenue", 30, 200, 100, 400, 150, 250],
            ["Pageview", 50, 20, 10, 40, 15, 25],
          ],
          types: { Revenue: "bar" },
          colors: { Revenue: "#fcc24c", Pageview: "#508aeb" },
        },
        axis: { rotated: !0, x: { type: "categorized" } },
      }),
      c3.generate({
        bindto: "#chart-stacked",
        data: {
          columns: [
            [
              "Revenue",
              130,
              120,
              150,
              140,
              160,
              150,
              130,
              120,
              150,
              140,
              160,
              150,
            ],
            [
              "Pageview",
              200,
              130,
              90,
              240,
              130,
              220,
              200,
              130,
              90,
              240,
              130,
              220,
            ],
          ],
          types: { Revenue: "area-spline", Pageview: "area-spline" },
          colors: { Revenue: "#dddddd", Pageview: "#508aeb" },
        },
      }),
      c3.generate({
        bindto: "#donut-chart",
        data: {
          columns: [
            ["Desktops", 78],
            ["Smart Phones", 55],
            ["Mobiles", 40],
            ["Tablets", 25],
          ],
          type: "donut",
        },
        donut: { title: "Candidates", width: 30, label: { show: !1 } },
        color: { pattern: ["#508aeb", "#ebeff2", "#fcc24c", "#ff5560"] },
      }),
      c3.generate({
        bindto: "#pie-chart",
        data: {
          columns: JSON.parse('{!! json_encode($categoriesAndTotalPost) !!}'),
          type: "pie",
        },
        color: { pattern: ["#508aeb", "#ebeff2", "#ff5560", "#fcc24c"] },
        pie: { label: { show: !1 } },
      });
  }),
    (e.ChartC3 = new a()),
    (e.ChartC3.Constructor = a);
})(window.jQuery),
  (function (e) {
    "use strict";
    window.jQuery.ChartC3.init();
  })();
