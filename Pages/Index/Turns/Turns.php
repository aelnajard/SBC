<style media="screen">





  .turns{
    position: relative;
    background-color: #0E7C7B;
    padding: 70px 40px;
  }
  .selectDay, .selecttime{
    position: relative;
    padding: 0px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    width: 95vw;
    max-width: 1040px;
  }
  .selecttime, .formTurns{
    display: none;
  }








  .daysContainer{
    position: relative;
    height: 100px;
    width: 100px;
    min-width: 150px;
    margin: 7px;
    background-color: #062537;
    cursor: pointer;
    transition: all .4s;
  }

  .daysContainer:hover{
    background-color: #69727B;
    transition: all .4s;
  }
  .days{
    position: relative;
    top: 30%;
    transform: translateY(-50%);
  }
  .daysContainer h3, .daysContainer h6{
    position: relative;
    color: white;
    text-align: center;
    margin-bottom: 4px;
  }
  .daysContainer h6{
    position: relative;
    color: white;
    text-align: center;
    font-size: 1em;
    margin: 0;
  }
  .turns h3{
    position: relative;
    font-weight: 300;
    width: 100%;
    text-align:center;
  }












  .timesContainer{
    position: relative;
    height: 40px;
    width: 130px;
    margin: 7px;
    background-color: #062537;
    cursor: pointer;
    transition: all .4s;
  }
   .timesContainer:hover{
    background-color: #69727B;
    transition: all .4s;
  }
  .timesContainer h3{
    margin: 0;
    top: 25%;
    transform: translateY(-50%;);
    position: relative;
    color: white;
    text-align: center;
    font-size: 1em;
  }
  .timesContainerButton{
    width: 100%;
    padding: 15px 0;
  }
  .timesContainerButton button{
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    background-color: transparent;
    border: 0px solid  black;
    color: #0d0d91;
    font-size: 1em;
    cursor: pointer;
    font-weight: 500;
  }

  .timesContainerButton button:hover{
    color: #1414c9;
    transition: all  .4s;
  }











  .inputContainerTurns, .inputContainerTurns2{
    position: relative;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 10px 0;
    max-width: 500px;
    left: 50%;
    transform: translateX(-50%);
  }

  .inputContainerTurns h4, .inputContainerTurns input,  .inputContainerTurns2 h4{
    position: relative;
    font-size: 1em;
    font-weight: 200;
    margin: 7px;
    text-align: left;
    width: 45%;
    min-width: 196px;
    max-width: 231px;
  }

   .inputContainerTurns input{
     text-align: center;
  }



  .groupNIT{
    position: relative;
    margin: 7px;
    width: 48%;
    min-width: 196px;
    max-width: 231px;
    height: 30px;
  }

  .groupNIT input{
    height: 65%;
    font-size: 1em;
    font-weight: 200;
    display: inline-block;
    text-align: center;
  }

  .groupNIT h5{
    position: absolute;
    height: 70%;
    font-size: 1em;
    font-weight: 200;
    display: inline-block;
    width: 5px;
    left: 176px;

  }

  .groupNIT input:nth-child(1){
    position: absolute;

    top: 0px;
    left: 0px;
    width: 160px;
 }

 .groupNIT input:nth-child(3){
   position: absolute;

   top: 0px;
   width: 30px;
   left: 196px;
}








  .inputContainerTurns button{
    height: 40px;
    width: 120px;
    background-color: #062537;
    color: white;
    font-size: 1em;
    cursor: pointer;
    margin-top: 10px;
  }
  .formTurnsContainerButton button{
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    background-color: transparent;
    border: 0px solid  black;
    color: #0d0d91;
    font-size: 1em;
    cursor: pointer;
    font-weight: 500;
  }
  .formTurnsContainerButton button:hover{
    color: #1414c9;
    transition: all  .4s;
  }














  /*inputContainerTurns*/



</style>

<section class="turns">
  <h1>Reserva tu turno</h1>

  <div class="selectDay">
    <h3> 1. Seleccona el día que te quede mejor asistir a la feria:</h3>

    <div class="daysContainer">
      <div class="days">
        <h3 >Lunes</h3>
        <h6 class="dayValue">21 de marzo 2022</h6>
      </div>
    </div>

    <div class="daysContainer">
      <div class="days">
        <h3>Martes</h3>
        <h6 class="dayValue">22 de marzo 2022</h6>
      </div>
    </div>

    <div class="daysContainer">
      <div class="days">
        <h3>Miercoles</h3>
        <h6 class="dayValue">23 de marzo 2022</h6>
      </div>
    </div>

    <div class="daysContainer">
      <div class="days">
        <h3>Jueves</h3>
        <h6 class="dayValue">24 de marzo 2022</h6>
      </div>
    </div>

    <div class="daysContainer">
      <div class="days">
        <h3>Viernes</h3>
        <h6 class="dayValue">25 de marzo 2022</h6>
      </div>
    </div>

  </div>


  <div class="selecttime">
    <h3> 2. Ahora seleccona la hora que mejor se  acomode a ti:</h3>
    <div class="timesContainer">
      <h3 class="timeValue">08:00 - 09:00</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">08:20 - 09:20</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">08:40 - 09:40</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">09:00 - 10:00</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">09:20 - 10:20</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">09:40 - 10:40</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">10:00 - 11:00</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">10:20 - 11:20</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">10:40 - 11:40</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">11:00 - 12:00</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">13:00 - 14:00</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">-13:20 - 14:20</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">13:40 - 14:40</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">14:00 - 15:00</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">14:20 - 15:20</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">14:40 - 15:40</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">15:00 - 16:00</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">15:20 - 16:20</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">15:40 - 16:40</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">16:00 - 17:00</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">16:20 - 17:20</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">16:40 - 17:40</h3>
    </div>
    <div class="timesContainer">
      <h3 class="timeValue">17:00 - 18:00</h3>
    </div>

    <div  class="timesContainerButton">
      <button id="comeBackToDate" type="button" name="button"> Regresar </button>
    </div>

  </div>


  <div class="formTurns">
    <h3> 3. Regalanos la siguiente información:</h3>

    <div class="inputContainerTurns">
      <h4>Nombre</h4>
      <input id="nameUserTurn" type="text" name="" value="">
    </div>

    <div class="inputContainerTurns">
      <h4>Correo de impresistem</h4>
      <input id="emailUserTurn" type="text" name="" value="">
    </div>

    <div class="inputContainerTurns">
      <h4>Empresa</h4>
      <input id="companyUserTurn" type="text" name="" value="">
    </div>

    <div class="inputContainerTurns">
      <h4>Cargo en la empresa</h4>
      <input id="PositionInCompanyUserTurn" type="text" name="" value="">
    </div>

    <div class="inputContainerTurns">
      <h4>Número telefónico</h4>
      <input id="PhoneUserTurn" type="text" name="" value="">
    </div>

    <div class="inputContainerTurns2">
      <h4>NIT de la empresa</h4>
      <div class="groupNIT">
        <input id="NITUserTurn" type="text" name="" value="">
        <h5>-</h5>
        <input id="DVUserTurn" type="text" name="" value="">
      </div>
    </div>

    <div class="inputContainerTurns">
      <button id="sendData" type="button" name="button">Enviar</button>
    </div>
    <div class="formTurnsContainerButton">
      <button id="comeBackToTime" type="button" name="button"> Regresar </button>
    </div>
  </div>
</section>

<script type="text/javascript">



  var selectDay = document.getElementsByClassName('selectDay')[0].style;
  var selecttime = document.getElementsByClassName('selecttime')[0].style;
  var formTurns = document.getElementsByClassName('formTurns')[0].style;

  var day;
  var time;


    const daysContainer = document.querySelectorAll(".daysContainer");

    for (let i = 0; i < daysContainer.length; i++) {
      daysContainer[i].addEventListener("click", function(){
         selectDay.display  = "none";
         selecttime.display  = "flex";

         day = document.getElementsByClassName('daysContainer')[i].getElementsByClassName('dayValue')[0].textContent;
        })
    }



      const timesContainer = document.querySelectorAll(".timesContainer");
      for (let i = 0; i < timesContainer.length; i++) {
        timesContainer[i].addEventListener("click", function(){
          selecttime.display  = "none";
          formTurns.display  = "block";

          time = document.getElementsByClassName('timesContainer')[i].getElementsByClassName('timeValue')[0].textContent;
          })
      }


      var comeBackToDate = document.getElementById('comeBackToDate');
      comeBackToDate.addEventListener("click", function(){
        selectDay.display  = "flex";
        selecttime.display  = "none";
      })


      var comeBackToTime = document.getElementById('comeBackToTime');
      comeBackToTime.addEventListener("click", function(){
        selecttime.display  = "flex";
        formTurns.display  = "none";
      })


      var sendData = document.getElementById('sendData');
      sendData.addEventListener("click", function(){

      day =  day.substring(0,2);
      time =  time.substring(0,5);

      var date = "2022-03-"+day+ " "+ time + ":00";

      var  name = document.getElementById('nameUserTurn').value;
      var  email = document.getElementById('emailUserTurn').value;
      var  NITValue = document.getElementById('NITUserTurn').value;
      var  DVUserTurn = document.getElementById('DVUserTurn').value;
      var  companyUserTurn = document.getElementById('companyUserTurn').value;
      var  PositionInCompanyUserTurn = document.getElementById('PositionInCompanyUserTurn').value;
      var  PhoneUserTurn = document.getElementById('PhoneUserTurn').value;


      if (name != "" && email != "" && NITValue != "" && DVUserTurn != ""
      && companyUserTurn  != "" && PositionInCompanyUserTurn != "" && PhoneUserTurn != "" ) {
        if (email.search("@")!= -1) {
          if (!isNaN(NITValue+DVUserTurn)) {


            $.ajax( "App/Controller/Controller.php", {
          		type: 'post',
          		async: false,
          		data: {
          			module: "turnsSend",
                name:name,
                email:email,
                NITValue: NITValue + DVUserTurn,
                companyUserTurn: companyUserTurn,
                PositionInCompanyUserTurn: PositionInCompanyUserTurn,
                PhoneUserTurn: PhoneUserTurn
          		},
          		success: function(data){
          			alert(data);
          	 }
          	}
           )

              //alert(date + "    " + name + email + NITValue + DVUserTurn + companyUserTurn + PositionInCompanyUserTurn + PhoneUserTurn);
          }
          else {
            alert("El NIT que ingresaste debe ser un número");
          }
        }
        else {
          alert("El correo que ingresaste no es válido");
        }
      }
      else {
        alert("Hay campos vacios, ingresa toda la información");
      }
      });



</script>
