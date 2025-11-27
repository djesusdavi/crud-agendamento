
document.addEventListener('DOMContentLoaded', function(){
  const form = document.querySelector('form[action="?page=salvar"], form[action="?page=salvar"]');
  if(!form) return;

  form.addEventListener('submit', function(e){
    // evita multiple submit
    if (form.dataset.submitted === "1") {
      e.preventDefault();
      return;
    }

    const nome = form.querySelector('[name="nome"]');
    const horario = form.querySelector('[name="horario"]');
    const data = form.querySelector('[name="data"]');
    const service = form.querySelector('[name="service_id"]');

    
    if(!nome.value.trim() || !horario.value || !data.value || !service.value){
      alert('Preencha todos os campos obrigatórios.');
      e.preventDefault();
      return;
    }

    const selectedDate = new Date(data.value + ' ' + horario.value);
    const now = new Date();
    now.setSeconds(0); now.setMilliseconds(0);
    if(selectedDate < now){
      alert('A data e horário devem ser futuros.');
      e.preventDefault();
      return;
    }

    const [h,m] = horario.value.split(':').map(Number);
    if(h < 9 || h > 19){
      alert('Horário fora do funcionamento (09:00 - 19:00).');
      e.preventDefault();
      return;
    }

    form.dataset.submitted = "1";
    const btn = form.querySelector('button[type="submit"]');
    if(btn){
      btn.innerText = 'Enviando...';
      btn.disabled = true;
    }
  });
});
