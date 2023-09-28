<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="transWrap">
		<div id="transList">
			<div id="index-sliderList"></div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
	function RyderPixi(el, pics) {
		this.initScene = () => {
			this.renderer = new PIXI.autoDetectRenderer({
				transparent: true,
				width: $(el).width(),
				height: $(el).height(),
				antialias: true,
			});

			this.renderer.autoResize = true;

			$(el).append(this.renderer.view)
		}

		this.initStage = () => {
			this.stage = new PIXI.Container();
			this.container = new PIXI.Container();
			this.stage.addChild(this.container);
		}

		this.initProperty = () => {
			this.view_width = $(el).width();
			this.view_height = $(el).height();
			this.count = 0;
			this.now = 0;
			this.timer = null;

			this.sliders = []

			for (p of pics) {
				this.sliders.push(PIXI.Texture.from(p))
			}
		}

		this.initFilter = () => {

			const geometry = new PIXI.Geometry();
			geometry.addAttribute('aVertexPosition', [0, 0, this.view_width, 0, this.view_width, this.view_height, 0, this.view_height], 2);
			geometry.addAttribute('aUvs', [0, 0, 1, 0, 1, 1, 0, 1], 2).addIndex([0, 1, 2, 0, 2, 3]);

			const vertexSrc = `
				precision mediump float;

				attribute vec2 aVertexPosition;
				attribute vec2 aUvs;

				uniform mat3 translationMatrix;
				uniform mat3 projectionMatrix;

				varying vec2 vUvs;

				void main() {

					vUvs = aUvs;
					gl_Position = vec4((projectionMatrix * translationMatrix * vec3(aVertexPosition, 1.0)).xy, 0.0, 1.0);

				}
			`;

			const fragmentSrc = `
				precision mediump float;

				varying vec2 vUvs;

				uniform sampler2D uSampler2;
				uniform sampler2D uSampler3;


				uniform float time;
				uniform float progress;



				vec4 getFromColor(vec2 uv) {
					return texture2D(uSampler2, uv);
				}

				vec4 getToColor(vec2 uv) {
					return texture2D(uSampler3, uv);
				}




				uniform vec2 direction; // = vec2(1.0, -1.0)
				uniform float smoothness; // = 0.5

				const vec2 center = vec2(0.5, 0.5);

				vec4 transition (vec2 uv) {
				  vec2 v = normalize(direction);
				  v /= abs(v.x)+abs(v.y);
				  float d = v.x * center.x + v.y * center.y;
				  float m =
				    (1.0-step(progress, 0.0)) * // there is something wrong with our formula that makes m not equals 0.0 with progress is 0.0
				    (1.0 - smoothstep(-smoothness, 0.0, v.x * uv.x + v.y * uv.y - (d-0.5+progress*(1.+smoothness))));
				  return mix(getFromColor(uv), getToColor(uv), m);
				}



				void main() {

					vec2 uv = vUvs;

					gl_FragColor = transition(uv);
				}
			`;

			const uniforms = {
				uSampler2: this.sliders[0],
				uSampler3: this.sliders[1],
				time: 0,
				progress: 0,
				direction: [0, -1],
				smoothness: 1.1,
			};

			const shader = new PIXI.Shader.from(vertexSrc, fragmentSrc, uniforms);
			this.quad = new PIXI.Mesh(geometry, shader);

			this.container.addChild(this.quad);
		}

		this.render = () => {
			this.count += 0.01;

			this.quad.shader.uniforms.time += 0.02;
			// this.quad.shader.uniforms.progress = Math.abs( Math.sin(this.count) );

			this.renderer.render(this.stage);
			requestAnimationFrame(this.render);
		}

		this.init = () => {
			this.initScene()
			this.initStage()
			this.initProperty()
			this.initFilter()
			this.render()

			return this;
		}

		this.goto = (i, prev) => {
			this.quad.shader.uniforms.progress = 0
			this.quad.shader.uniforms.uSampler2 = this.sliders[prev]
			this.quad.shader.uniforms.uSampler3 = this.sliders[i]

			gsap.to(this.quad.shader.uniforms, {
				duration: 2.5,
				'progress': 1,
				onComplete: () => {
					this.now = (this.now + 1 + this.sliders.length) % this.sliders.length
				}
			})
		}

		this.autoplay = (i) => {
			this.quad.shader.uniforms.progress = 0
			this.quad.shader.uniforms.uSampler2 = this.sliders[i]
			this.quad.shader.uniforms.uSampler3 = this.sliders[(i + 1 + this.sliders.length) % this.sliders.length]

			gsap.to(this.quad.shader.uniforms, {
				duration: 2.5,
				'progress': 1,
				onComplete: () => {
					this.now = (this.now + 1 + this.sliders.length) % this.sliders.length

					gsap.delayedCall(3, () => {
						this.autoplay(this.now)
					});
				}
			})
		}
	}

	let rydergl;
	const pics = [
		'images/bb01.jpg',
		'images/bb02.jpg',
		'images/bb01.jpg',
		'images/bb02.jpg',
	];

	rydergl = new RyderPixi($("#index-sliderList"), pics).init()
	gsap.delayedCall(.1, () => {
		rydergl.autoplay(0)
	})
</script>