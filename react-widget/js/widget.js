// public_html/react-widget/static/js/widget.js
(function() {
    const e = React.createElement;
    function App() {
      return e('div', null, 'Hello from React Widget!');
    }
    ReactDOM.render(
      e(App),
      document.getElementById('react-widget-root')
    );
  })();
  