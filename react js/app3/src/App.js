import { useState } from 'react';
import './App.css';
import PropsDemo1 from './Components/PropsDemo1';
import PropsDemo2 from './Components/PropsDemo2';
import PropsDemo3 from './Components/PropsDemo3';
import PropsDemo4 from './Components/PropsDemo4';
import PropsDemo5 from './Components/PropsDemo5';
import Example1 from './Components/Example1';
import PropsDemo6 from './Components/PropsDemo6';

function App() {
  let [username, setUsername] = useState("Khushbu Kaneriya");
  let [fname, setFname] = useState("Khushbu");
  let [lname, setLname] = useState("Kaneriya");
  let [status, setStatus] = useState(true);

  function greetings(userdata){
    alert(`Welcome ${userdata} to world of React JS`);
  }

  return (
    <div className="App">
      {/* <PropsDemo1 username={username}></PropsDemo1> */}
      {/* <PropsDemo2 username={username}></PropsDemo2> */}
      {/* <PropsDemo3 fname={fname} lname={lname}></PropsDemo3> */}
      {/* <PropsDemo4 user={{"fname":fname, "lname":lname}}></PropsDemo4> */}
      {/* <PropsDemo4 user={{fname, lname}}></PropsDemo4> */}
      {/* <PropsDemo5 user={{"fname":fname, "lname":lname}}></PropsDemo5> */}
      {/* <PropsDemo5 user={{"fname":fname, "lname":lname}} /> */}
      {/* <button onClick={()=>{ setFname("KHUSHBU"); setLname("KANERIYA");}}>Update Name</button> */}
      <button onClick={() => setStatus(false)}>Hide</button>
      <button onClick={() => setStatus(true)}>Show</button>
      <button onClick={() => setStatus(!status)}>Toggle</button>
      {
        status ? <Example1></Example1> : <h1>Compnent is Hidden</h1>
      }

      <PropsDemo6 greetings={greetings}></PropsDemo6>
    </div>
  );
}

export default App;
