import logo from './logo.svg';
import './App.css';
import Khushbu from './Components/Khushbu';
import Rajkot from './Components/Rajkot';
import {Gm, Gn, Ge} from './Components/Greetings';
import Greetings1 from './Components/Greetings1';
import ClassDemo1 from './Components/ClassDemo1';
function App() {
  return (
    <div className="App">
      {/* <Khushbu></Khushbu>
      <Rajkot></Rajkot>
      <Gm></Gm>
      <Gn></Gn>
      <Ge></Ge>
      <Greet1></Greet1>
      <Greetings1></Greetings1> */}
      <ClassDemo1></ClassDemo1>
    </div>
  );
}

function Greet1(){
  return <h1>Another Function</h1>
}

export default App;
