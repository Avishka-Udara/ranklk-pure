// Function to fetch data and update the values on the webpage
function fetchDataAndDisplay() {
    fetch('http://cloudfront.akilai.me/data.json')
      .then(response => response.json())
      .then(data => {
        const Devsell = document.getElementById('derivsell');
        const Devbuy = document.getElementById('derivbuy');
        const Skrillsell = document.getElementById('sksell');
        const Skrillbuy = document.getElementById('skbuy');
        const Usdsell = document.getElementById('usdtsell');
        const Usdbuy = document.getElementById('usdtbuy');
        const paysell = document.getElementById('paysell');
        const paybuy = document.getElementById('paybuy');
  
        // Display the data on the webpage
        Devsell.innerHTML = `${data[0].selling}`;
        Devbuy.innerHTML = `${data[0].buying}`;
        Skrillsell.innerHTML = `${data[1].selling}`;
        Skrillbuy.innerHTML = `${data[1].buying}`;
        Usdsell.innerHTML = `${data[2].selling}`;
        Usdbuy.innerHTML = `${data[2].buying}`;
        paysell.innerHTML = `${data[3].selling}`;
        paybuy.innerHTML = `${data[3].buying}`;
      })
      .catch(error => {
        console.error('Error fetching JSON:', error);
      });
  }
  
  // Fetch data every 5 seconds and update values
  setInterval(fetchDataAndDisplay, 1000); // 5000 milliseconds = 5 seconds
  