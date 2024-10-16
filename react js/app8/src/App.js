import logo from './logo.svg';
import './App.css';
import Home from './Components/Home';
import About from './Components/About';
import Services from './Components/Services';
import Feedback from './Components/Feedback';
import Contact from './Components/Contact';
import Error404 from './Components/Error404';
import Menu from './Components/Menu';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Menu></Menu>

        <Routes>
          <Route path='/' element={<Home/>}></Route>
          <Route path='/about' element={<About/>}></Route>
          <Route path='/services' element={<Services/>}></Route>
          <Route path='/feedback' element={<Feedback/>}></Route>
          <Route path='/contact' element={<Contact/>}></Route>
          <Route path='*' element={<Error404/>}></Route>
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
