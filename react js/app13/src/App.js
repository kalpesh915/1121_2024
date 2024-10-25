import Home from "./Component/Home";
import About from './Component/About';
import Services from "./Component/Services";
import { useState } from "react";
import { CommonData } from "./Component/CommonContex";
import ChildComponent from "./Component/ChildComponent";
function App() {

  let [theme, setTheme] = useState({ bg: "black", fg: "white" });
  let [counter, setCounter] = useState(1);
  return (
    <div>
      <CommonData.Provider value={theme}>
        <Home></Home>
        <About></About>
        <Services></Services>
      </CommonData.Provider>

      <button onClick={() => setTheme({ bg: "black", fg: "white" })}>Theme 1</button>
      <button onClick={() => setTheme({ bg: "yellow", fg: "red" })}>Theme 2</button>
      <button onClick={() => setTheme({ bg: "black", fg: "teal" })}>Theme 3</button>
      <button onClick={() => setTheme({ bg: "olive", fg: "white" })}>Theme 4</button>
      <button onClick={() => setTheme({ bg: "brown", fg: "white" })}>Theme 5</button>

      <hr />
      <h1>Counter is {counter}</h1>
      {/* <button onClick={() => setCounter((previousValue) => {
        console.log("Previous State is : ",previousValue);
        return previousValue + 1
      })}>Update</button> */}

      {/* <button onClick={()=>setCounter((prev)=>{
        console.log(prev);
        return Math.ceil(Math.random()*10);
      })}>Update</button> */}

      {/* <button onClick={() => setCounter((prev) => {
        console.log(prev);
        const num = Math.ceil(Math.random() * 10);
        if(num == prev){
          return prev;
        }else{
          return num;
        }
      })}>Update</button> */}

      <ChildComponent data={counter}></ChildComponent>
      <button onClick={()=>setCounter(counter+1)}>Update</button>
    </div>
  );
}

export default App;
