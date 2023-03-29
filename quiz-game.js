const startBtn = document.querySelector(".start-button button");
const infoBox = document.querySelector(".info-container");
const exitBtn = infoBox.querySelector(".info-buttons .exit");
const playBtn = infoBox.querySelector(".info-buttons .play");
const quizBox = document.querySelector(".quiz-container");
const nextBtn = quizBox.querySelector(".next-btn");
const questionsCounter = quizBox.querySelector(".question-number");
const resultBox = document.querySelector(".result-container");

const optionList = document.querySelector(".option-list");

const replayQuiz = resultBox.querySelector(".continue-buttons .replay");
const quitQuiz = resultBox.querySelector(".continue-buttons .quit");


// IF START BUTTON IS CLICKED
startBtn.onclick = () => {
    infoBox.classList.add("active-info-container");
}


// INFO BOX

// IF EXIT BUTTON IS CLICKED
exitBtn.onclick = () => {
    infoBox.classList.remove("active-info-container");
}

// IF PLAY BUTTON IS CLICKED
playBtn.onclick = () => {
    infoBox.classList.remove("active-info-container");
    quizBox.classList.add("active-quiz-container");
    showQuestions(0);
    queCounter(1);
}


let queCnt = 0;
let queNr = 1;
let userScore = 0;






// IF NEXT QUESTION BUTTON IS CLICKED
nextBtn.onclick = () => {
    if(queCnt < questions.length - 1) {
       queCnt++;
       queNr++;
       showQuestions(queCnt);
       queCounter(queNr);
       nextBtn.style.display = "none";
    } else {
        console.log("Questions completed");
        showResultBox();
    }
    if(queCnt == questions.length - 1) {
        nextBtn.innerHTML = "Finish";
    }
}


// GETTING THE QUESTIONS AND THE ANSWERS
function showQuestions(index) {
    const queText = document.querySelector(".question-text");
    let queNr = '<h3>' + questions[index].numb + ". " + questions[index].question + '</h3>';
    let optionNr = '<div class="option">'+ questions[index].options[0] +'<span></span> </div>'
                 + '<div class="option">'+ questions[index].options[1] +' <span></span> </div>'
                 + '<div class="option">'+ questions[index].options[2] +' <span></span> </div>'
                 + '<div class="option">'+ questions[index].options[3] +' <span></span> </div>';
    queText.innerHTML = queNr;
    optionList.innerHTML = optionNr;

    const option = optionList.querySelectorAll(".option");
    for (let i = 0; i < option.length; i++) {
        option[i].setAttribute("onclick", "optionSelected(this)");  
    }
}


let tickIcon = '<div class="tick"> <i class="material-icons">check_box</i> </div>'
let wrongIcon = '<div class="wrong"> <i class="material-icons">cancel</i> </div>'


function optionSelected(answer) {
    let userAnswer = answer.innerText;
    let correctAnswer = questions[queCnt].answer;
    let allOptions = optionList.children.length;

    if(userAnswer == correctAnswer){
        userScore += 1;
        console.log(userScore);
        answer.classList.add("correct");
        console.log("correct");
        answer.insertAdjacentHTML("beforeend", tickIcon);
    }else{  
        answer.classList.add("incorrect");
        console.log("wrong");
        answer.insertAdjacentHTML("beforeend", wrongIcon);

        // IF AN INCORRECT ANSWER IS CHOOSEN, AUTOMATICALLY SELECT THE CORRECT ONE
        for (let i = 0; i < allOptions; i++) {
            if(optionList.children[i].innerText == correctAnswer) {
                 optionList.children[i].setAttribute("class", "option correct");
                 optionList.children[i].insertAdjacentHTML("beforeend", tickIcon);
            }
        }

    }


    // DISABLING THE OTHER OPTIONS AFTER ONE OPTION IS CLICKED
    for(let i = 0; i < allOptions; i++) {
        optionList.children[i].classList.add("disabled"); 
    }

    nextBtn.style.display = "block";
}


function showResultBox() {
    quizBox.classList.remove("active-quiz-container");
    resultBox.classList.add("active-result-container");

    const scoreText = resultBox.querySelector(".score-text");
    let scoreTag = 'Your score is <p>' + userScore + '</p> out of <p>' + questions.length + '</p>!';
    scoreText.innerHTML = scoreTag;
}



// THE QUESTIONS COUNTER FROM THE BOTTOM
function queCounter(index) {
    let totalQuesCntTag = '<span><p>' + index + '</p>of<p>' + questions.length + '</p>questions</span>';
    questionsCounter.innerHTML = totalQuesCntTag;
}




// QUIT QUIZ
quitQuiz.onclick = () => {
    window.location.reload();
}

// REPLAY QUIZ
