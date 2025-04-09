// ONDAS QUE SE MUEVEN MÁS ALEATORIAMENTE PERO CON EXTREMOS ESTÁTICOS
  
  // SineWaveGenerator.prototype.drawSine = function (time, options) {
  //   const amplitude = options.amplitude || 50;
  //   const wavelength = options.wavelength || 50;
  //   const lineWidth = options.lineWidth || 2;
  //   const strokeStyle = options.strokeStyle || 'rgba(145, 198, 155, 1)';
  //   const segmentLength = options.segmentLength || 10;
  
  //   this.ctx.lineWidth = lineWidth * this.dpr;
  //   this.ctx.strokeStyle = strokeStyle;
  //   this.ctx.beginPath();
  
  //   let x = time;
  //   let y = 0;
  //   const yAxis = this.height / 2;
  
  //   // Mantén las ondas separadas desde el inicio
  //   const baseOffset = options.baseOffset || 50; // Desfase inicial para separar las líneas
  
  //   this.ctx.moveTo(0, yAxis + baseOffset);
  //   this.ctx.lineTo(this.waveLeft, yAxis + baseOffset);
  
  //   for (let i = 0; i < this.waveWidth; i += segmentLength) {
  //     x = (time * options.speedModifier) + (-yAxis + i) / wavelength;
  //     y = Math.sin(x);
  //     const amp = amplitude * (Math.sin((i / this.waveWidth) * Math.PI * 2 - Math.PI / 2) + 1) * 0.5;
  //     this.ctx.lineTo(i + this.waveLeft, amp * y + yAxis + baseOffset);
  //   }
  
  //   this.ctx.lineTo(this.width, yAxis + baseOffset);
  //   // Punto final dinámico
  //   const endY = yAxis + amplitude * Math.sin((this.waveWidth / wavelength) + (time * options.speedModifier));
  //   this.ctx.lineTo(this.width, endY);
  //   this.ctx.stroke();
  // };
  

  

//   ONDAS CON EXTREMOS DINÁMICOS

  function SineWaveGenerator(options) {
    Object.assign(this, options || {});
    if (!this.el) { throw "No Canvas Selected"; }
    this.ctx = this.el.getContext('2d');
    if (!this.waves.length) { throw "No waves specified"; }
  
    this._resizeWidth();
    window.addEventListener('resize', this._resizeWidth.bind(this));
    this.loop();
  }
  
  SineWaveGenerator.prototype._resizeWidth = function () {
      this.dpr = window.devicePixelRatio || 1;
    this.width = this.el.width = window.innerWidth * this.dpr;
    this.height = this.el.height = (window.innerHeight * 0.3) * this.dpr;
    this.el.style.width = window.innerWidth + 'px';
    this.el.style.height = (window.innerHeight * 0.35) + 'px'; 
    this.waveWidth = this.width * 0.95;
    this.waveLeft = this.width * 0.025;
  };
  
  SineWaveGenerator.prototype.clear = function () {
    this.ctx.clearRect(0, 0, this.width, this.height);
  };
  
  SineWaveGenerator.prototype.drawSine = function (time, options) {
    const amplitude = options.amplitude || 50;
    const wavelength = options.wavelength || 50;
    const lineWidth = options.lineWidth || 2;
    const strokeStyle = options.strokeStyle || 'rgba(145, 198, 155, 1)';
    const segmentLength = options.segmentLength || 10;
  
    this.ctx.lineWidth = lineWidth * this.dpr;
    this.ctx.strokeStyle = strokeStyle;
    this.ctx.beginPath();
  
    let x = 0;
    let y = 0;
    const yAxis = this.height / 2;
  
    this.ctx.moveTo(0, yAxis + Math.sin(time * options.speedModifier) * amplitude);
  
    for (let i = 0; i <= this.width; i += segmentLength) {
      x = (time * options.speedModifier) + i / wavelength;
      y = Math.sin(x) * amplitude;
      this.ctx.lineTo(i, yAxis + y);
    }
  
    this.ctx.stroke();
  };
  
  SineWaveGenerator.prototype.loop = function () {
    this.clear();
    const time = Date.now() / 3000; 
    this.waves.forEach((wave) => {
      this.drawSine(time * wave.timeModifier, wave);
    });
    window.requestAnimationFrame(this.loop.bind(this));
  };
  
  document.querySelectorAll('.waves').forEach(canvas => {
    new SineWaveGenerator({
      el: canvas,
    waves: [
      { baseOffset: 67, speedModifier: 0.8, timeModifier: 2, lineWidth: 2, amplitude: 150, wavelength: 300, strokeStyle: 'rgba(145, 198, 155, 0.5)' },
      { baseOffset: 42, speedModifier: 0.6, timeModifier: 2.5, lineWidth: 2, amplitude: 110, wavelength: 400, strokeStyle: 'rgba(88, 178, 199, 0.5)' },
      { baseOffset: 13, speedModifier: 0.4, timeModifier: 3, lineWidth: 2, amplitude: 95, wavelength: 500, strokeStyle: 'rgba(145, 198, 155, 0.3)' }
    ]
  });
  });