import logo from './logo.svg';
import './App.css';
import LifeCycle1 from './Components/LifeCycle1';
import LifeCycle2 from './Components/LifeCycle2';
import LifeCycle3 from './Components/LifeCycle3';
import LifeCycle4 from './Components/LifeCycle4';
import LifeCycle5 from './Components/LifeCycle5';
import LifeCycle6 from './Components/LifeCycle6';
import { useState } from 'react';
import LifeCycle7 from './Components/LifeCycle7';
import HooksDemo1 from './Components/HooksDemo1';
import HooksDemo2 from './Components/HooksDemo2';
import HooksDemo3 from './Components/HooksDemo3';

function App() {
  let [status, setStatus] = useState(true);
  return (
    <div className="App">
      {/* <LifeCycle1></LifeCycle1> */}
      {/* <LifeCycle2></LifeCycle2> */}
      {/* <LifeCycle3></LifeCycle3> */}
      {/* <LifeCycle4></LifeCycle4> */}
      {/* <LifeCycle5></LifeCycle5> */}
      {/* <LifeCycle6></LifeCycle6> */}
      {
        // status ? <LifeCycle7></LifeCycle7> : <h1>Component is Hidden</h1>
      }

      {/* <button onClick={()=>setStatus(!status)}>Toggle Component</button> */}

      {/* <HooksDemo1></HooksDemo1> */}
      {/* <HooksDemo2></HooksDemo2> */}
      <HooksDemo3></HooksDemo3>
    </div>
  );
}

export default App;
