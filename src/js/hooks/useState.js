/* 
How to use:
=====================================
const nameState = useState(0);

// to get the state value
nameState.Get();

// to set the state value
nameState.Set(1);
=====================================
*/

const useState = (initialState) => {
  return {
    Set: (callback) => {
      if (callback instanceof Function) {
        initialState = callback(initialState);
      } else {
        initialState = callback;
      }
    },
    Get: () => {
      return initialState;
    },
  };
};

export default useState;
