import React, { useEffect, useState }  from 'react';
import { LineChart, Line, CartesianGrid, XAxis, YAxis } from 'recharts';
import moment from 'moment';

import { getGraphData } from './api';
import './App.css';

function App() {
  const [selectedOption, setSelectedOption] = useState('7')
  const [graphData, setGraphData] = useState([])
  const fetchData = async (selectedDays) => {
    const apiData = await getGraphData(selectedDays)
    setGraphData(apiData)
    return apiData
  }
  const handleChange = (e) =>  {
    const selectedDays = e?.target?.value
    fetchData(selectedDays)
    setSelectedOption(selectedDays)
  }

  function formatXAxis(tickItem) {
    return moment(tickItem).format('DD/MM')
  }

  useEffect(() => {
    fetchData(selectedOption)
  }, [])

  return (
    <div className="App">
      <div className='rangeWrapper'>
          <select className='rangeSelector' onChange={handleChange} value={selectedOption}>
            <option value={'7'}> Last 7 Days  </option>
            <option value={'15'}> Last 15 Days  </option>
            <option value={'30'}> Last 1 Month  </option>
          </select>
      </div>
      <div className='graph'>
        <LineChart width={534} height={300} data={graphData}>
          <Line type="monotone" dataKey="demoDataYval" stroke="#8884d8" />
          <CartesianGrid stroke="#ccc" />
          <XAxis dataKey="demoDataTimestamp" tickFormatter={formatXAxis} />
          <YAxis />
        </LineChart>
      </div>
    </div>
  );
}

export default App;
