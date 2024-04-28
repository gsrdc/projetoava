document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var repetitions = document.getElementById("repetitions").value;
    
    if (fname.trim() === "" || lname.trim() === "" || repetitions.trim() === "") {
      alert("Por favor, preencha todos os campos.");
      return;
    }
    
    if (isNaN(repetitions) || repetitions <= 0) {
      alert("O número de repetições deve ser um número positivo.");
      return;
    }
    
    this.submit();
  });