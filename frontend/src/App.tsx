import { useState, type FormEvent } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import axios from 'axios'

function App() {
  const [inputVal, setInputVal] = useState<null | string>(null)

  const handleSubmit = async (e: FormEvent) => {
    e.preventDefault()
    const res = await axios.post("https://d49584515f1a.ngrok-free.app/api/create", {
      value: inputVal
    }, {
      headers: {
        "ngrok-skip-browser-warning": "1"
      },

    })
    const data = res.data
    console.log(data)
  }

  return (
    <>
      <form onSubmit={handleSubmit}>
        <input type="text" onChange={(e) => setInputVal(e.target.value)} />
        <input type="submit" />
      </form>
    </>
  )
}

export default App
