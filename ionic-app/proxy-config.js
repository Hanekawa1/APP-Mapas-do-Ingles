const proxy = [
    {
      context: '/api',
      target: 'http://testeapi:443/api/cadastros',
      pathRewrite: {'^/api' : ''}
    }
  ];
  module.exports = proxy;