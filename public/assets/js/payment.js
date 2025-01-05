const script = document.currentScript;
const url = script.dataset.url;

function goPaymentMethod(_this, method_id) {
    let elements = document.querySelectorAll('.checker');
    for (let i = 0; i < elements.length; i++) {
      elements[i].style.background = 'transparent';
      elements[i].style.color = '#000';
    }
  
    _this.querySelector('.checker').setAttribute('style', "background: #0093ff;color: #fff;");
  
    document.querySelector('input[name="method"]').value = method_id;
  }
  
  function goPa(amount) {
    let method = document.querySelector('input[name="method"]').value;
    if (method != '') {
      window.location.href = `${url}/${method}/${amount}`;
    } else {
      message('PLease select a payment method');
    }
  }