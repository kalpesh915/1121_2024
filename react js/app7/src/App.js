import logo from './logo.svg';
import './App.css';
import RefDemo1 from './Components/RefDemo1';
import RefDemo2 from './Components/RefDemo2';
import RefDemo3 from './Components/RefDemo3';
import RefDemo4 from './Components/RefDemo4';
import { useRef } from 'react';
import ControlledComponet from './Components/ControlledComponet';
import UnControlledComponet from './Components/UnControlledComponet';
import { Counter, HighOrderComponent } from './Components/HighOrderComponent';

function App() {
  let inputRef = useRef();
  return (
    <div className="App">
      {/* <RefDemo1 /> */}
      {/* <RefDemo2 /> */}
      {/* <RefDemo3 /> */}
      {/* <RefDemo4 ref={inputRef}/> */}
      {/* <hr /> */}
      {/* <button onClick={() => {
        inputRef.current.style.color = "red";
        inputRef.current.style.backgroundColor = "yellow";
      }}>Update</button> */}

      {/* <ControlledComponet></ControlledComponet> */}
      {/* <UnControlledComponet></UnControlledComponet> */}
      <HighOrderComponent demo={Counter}></HighOrderComponent>
      <HighOrderComponent demo={Counter}></HighOrderComponent>
      <HighOrderComponent demo={Counter}></HighOrderComponent>
      <HighOrderComponent demo={Counter}></HighOrderComponent>
      <HighOrderComponent demo={Counter}></HighOrderComponent>
    </div>
  );
}

export default App;
