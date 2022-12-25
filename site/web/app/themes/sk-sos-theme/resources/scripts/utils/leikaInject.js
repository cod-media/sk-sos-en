export const injectLeikaStyles = () => {
  applyPaymentStyles();
};

/* 
  К сожалению, в Leika нет возможности 
  добавлять стили в админке, поэтому 
  приходится делать это через JS.
  
  Если что-то сломается, то скорее всего
  это из-за изменения верстки на странице
  оплаты.

  В этом случае нужно будет переписать
  этот код.
*/
const applyPaymentStyles = () => {
  const paymentOptions = document.querySelectorAll(".payment-opt");
  if (!paymentOptions || paymentOptions.length === 0) {
    return;
  }
  // Заменяем картинки платежных систем на лого PayPal
  [...paymentOptions]
    .filter((option) => {
      return option.innerText.toLowerCase().includes("paypal");
    })
    .forEach((node) => {
      // Удаляем картинки платежных систем
      node.querySelectorAll("img").forEach((el) => el.remove());
      // Добавляем картинку PayPal
      const payPalLogo = document.createElement("img");
      payPalLogo.src = "https://sksos.fra1.digitaloceanspaces.com/PayPal-Logo.png";
      node.querySelector(".payment-opt__icon").appendChild(payPalLogo);
      // Удаляем лейблы
      node.querySelectorAll(".payment-opt__label").forEach((el) => el.remove());
    });
  // Удаляем карту МИР
  document.querySelectorAll(".card-mir").forEach((el) => el.remove());
};
