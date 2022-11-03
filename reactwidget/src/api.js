export const request = async (endpoint, params = {}) => {
    const response = await fetch(`${endpoint}`)
    const json = await response.json()
    return JSON.parse(json)
  }
  
  export const getGraphData = async (days) => request(`/wp-json/graphData/v1/proxy?days=${days}`)
