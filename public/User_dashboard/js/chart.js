let Ab = 0, An = 0, Bb = 0, Bn = 0, ABb = 0, ABn = 0, Ob = 0, On = 0;

const months = {
    'janv': "1",
    'fevr': "2",
    'mars': "3",
    'avril': "4",
    'mai': "5",
    'juin': "6",
    'juil': "7",
    'aout': "8",
    'sept': "9",
    'oct': "10",
    'nov': "11",
    'dec': "12"
};

const values = Object.values(months);

let Male = values.reduce((acc, val) => ({ ...acc, ['Male' + val]: 0 }), {});
let Female = values.reduce((acc, val) => ({ ...acc, ['Female' + val]: 0 }), {});

const ctx = document.getElementById('myChart2').getContext('2d');
const ctx2 = document.getElementById('myChart').getContext('2d');
let myChart2, myChart;

fetch('assets_dashboard/js/data.php')
    .then(response => response.json())
    .then(Tblood => {
        Tblood.forEach(blood => {
            switch (blood[1]) {
                case "A+": Ab = parseInt(blood[0]); break;
                case "A-": An = parseInt(blood[0]); break;
                case "B+": Bb = parseInt(blood[0]); break;
                case "B-": Bn = parseInt(blood[0]); break;
                case "AB+": ABb = parseInt(blood[0]); break;
                case "AB-": ABn = parseInt(blood[0]); break;
                case "O+": Ob = parseInt(blood[0]); break;
                case "O-": On = parseInt(blood[0]); break;
            }
        });
        createDoughnutChart();
    })
    .catch(error => console.error('Error fetching blood data:', error));

function createDoughnutChart() {
    try {
        if (myChart2) myChart2.destroy();
        myChart2 = new Chart(ctx2, {
            type: "doughnut",
            data: {
                labels: ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'],
                datasets: [{
                    label: "Stock",
                    data: [Ab, An, Bb, Bn, ABb, ABn, Ob, On],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });
    } catch (error) {
        console.error('Error creating the doughnut chart:', error);
    }
}

function year() {
    console.log(document.getElementById('yearSelect').value);
    const data = { key1: document.getElementById('yearSelect').value };
    fetch('assets_dashboard/js/Date.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data),
    })
        .then(response => response.json())
        .then(date => {
            values.forEach(val => {
                Male['Male' + val] = 0;
                Female['Female' + val] = 0;
            });

            date.forEach(d => {
                if (values.includes(d["month"])) {
                    const key = d["sex"] === "Male" ? 'Male' + d["month"] : 'Female' + d["month"];
                    if (d["sex"] === "Male") {
                        Male[key] = d["COUNT(dr.sex)"];
                    } else {
                        Female[key] = d["COUNT(dr.sex)"];
                    }
                }
            });

            createBarChart();
        })
        .catch(error => console.error('Error fetching date data:', error));
}

function createBarChart() {
    const chartData = {
        labels: Object.keys(months),
        datasets: [{
            label: 'Female',
            data: values.map(val => Female['Female' + val]),
            backgroundColor: 'rgba(255, 26, 104, 0.2)',
            borderColor: 'rgba(255, 26, 104, 1)',
            borderWidth: 1
        }, {
            label: 'Male',
            data: values.map(val => Male['Male' + val]),
            backgroundColor: 'rgba(111,168,220,0.6)',
            borderColor: 'rgba(111,168,220,1)',
            borderWidth: 1
        }]
    };

    const config = {
        type: 'bar',
        data: chartData,
        options: {
            scales: { y: { beginAtZero: true } }
        }
    };

    try {
        if (myChart) myChart.destroy();
        myChart = new Chart(ctx, config);
    } catch (error) {
        console.error('Error creating the bar chart:', error);
    }
}

document.getElementById('yearSelect').addEventListener('change', year);
year();
