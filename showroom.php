<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

    <style>
    body{
        background-color: rgb(249 244 237 / 50%);
    }
    </style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="showroomWrap grid-x">
		<div class="article-area cell large-auto hide-for-large">
            <div class="head-area">
                <div class="ch">展示據點</div>
                <div class="en">SHOW ROOM</div>
            </div>
        </div>

        <div class="pic-area cell large-shrink">
            <div class="transWrap">
                <div id="transList">
                    <div id="index-sliderList"></div>
                </div>
            </div>
            <ul class="grid-x align-center-middle" id="trans-in-dots"></ul>
        </div>

        <div class="article-area cell large-auto">
            <div class="head-area show-for-large">
                <div class="ch text-rd-ch" data-delay=".75">展示據點</div>
                <div class="en text-rd-en" data-delay=".75">SHOW ROOM</div>
            </div>

            <div class="info-area">
                <ul class="infoList">
                    <li>
                        <div class="title">ADD</div>
                        <div class="content">804 高雄市鼓山區鼓山三路5巷1號</div>
                    </li>
                    <li>
                        <div class="title">E-MAIL</div>
                        <div class="content">support@creeb.co</div>
                    </li>
                    <li>
                        <div class="title">OPEN</div>
                        <div class="content">MON to SUN 12:00~20:00</div>
                    </li>
                </ul>

				<div class="line text-center hide-for-large"><a href="javascript:;"><img src="images/show-line-mobile.svg"></a></div>

                <div class="shareListWrap grid-x align-bottom align-right">
                    <div class="shareList-item">
                        <div class="head text-center">SEE MORE ON</div>
                        <div class="share-row grid-x align-bottom">
                            <div class="deco"><svg width="35.34" height="62.52" viewBox="0 0 35.34 62.52">
                                <path d="M3.78,1.08l31.51,60.82c.11,.21,.03,.46-.18,.57-.2,.1-.45,.03-.56-.16L.27,3C-.28,2.05,.04,.82,1,.27,1.96-.28,3.18,.04,3.73,1c.01,.02,.03,.06,.04,.08Z" style="fill: #dcc5b7;"/>
                            </svg></div>
                            <nav class="shareList">
                                <a href="https://www.facebook.com/creeb.co/" target="_blank"><svg width="38.64" height="38.64" viewBox="0 0 38.64 38.64">
                                    <path d="M17.17,28.94v-11.13h-1.81v-1.79h1.81v-.61c0-1.81,.4-3.47,1.49-4.51,.88-.85,2.05-1.2,3.15-1.2,.83,0,1.55,.19,2,.37l-.32,1.81c-.35-.16-.83-.29-1.49-.29-2,0-2.51,1.76-2.51,3.74v.69h3.12v1.79h-3.12v11.13h-2.32Z" style="fill: #968375;"/>
                                    <path d="M20.06,29.51h-3.46v-11.13h-1.81v-2.93l1.81-.04c0-2.21,.56-3.87,1.67-4.92,.9-.87,2.16-1.36,3.54-1.36,1.09,0,1.91,.29,2.22,.42l.42,.18-.53,2.99-.67-.31c-.35-.16-.77-.24-1.26-.24-.9,0-1.94,.36-1.94,3.16v.12h3.12v2.93h-3.12v11.13Zm-2.32-1.14h1.18v-11.13h3.12v-.65h-3.12v-1.26c0-3.56,1.67-4.3,3.08-4.3,.37,0,.72,.04,1.05,.11l.12-.68c-.33-.09-.8-.19-1.35-.19-.63,0-1.82,.13-2.75,1.04-.88,.84-1.32,2.21-1.32,4.1v1.18h-1.81v.65h1.81v11.13Z" style="fill: #968375;"/>
                                    <circle cx="19.32" cy="19.32" r="18.18" style="fill: none; stroke: #968375; stroke-miterlimit: 10; stroke-width: 2.27px;"/>
                                </svg></a>
                                <a href="https://www.instagram.com/creeb.co/" target="_blank"><svg width="37.48" height="37.48" viewBox="0 0 37.48 37.48">
                                    <path d="M27,8.67c0,1.02,.83,1.85,1.85,1.85s1.85-.83,1.85-1.85-.83-1.85-1.85-1.85-1.85,.83-1.85,1.85Z" style="fill: #968375;"/>
                                    <rect x="1.14" y="1.14" width="35.21" height="35.21" rx="10.01" ry="10.01" style="fill: none; stroke: #968375; stroke-miterlimit: 10; stroke-width: 2.27px;"/>
                                    <rect x="10.48" y="10.48" width="16.52" height="16.52" rx="8.26" ry="8.26" style="fill: none; stroke: #968375; stroke-miterlimit: 10; stroke-width: 2.27px;"/>
                                </svg></a>
                            </nav>
                            <div class="deco"><svg width="35.34" height="62.52" viewBox="0 0 35.34 62.52">
                                <path d="M35.07,3L.79,62.31c-.12,.2-.37,.27-.58,.15-.2-.11-.27-.36-.16-.56L31.56,1.08c.51-.98,1.72-1.36,2.7-.86,.98,.51,1.36,1.72,.86,2.7-.01,.03-.03,.06-.04,.08Z" style="fill: #dcc5b7;"/>
                            </svg></div>
                        </div>
                    </div>
                    <div class="line-area show-for-large">
                        <div class="pic text-center"><img src="images/line-at.png" width="138"></div>
                        <div class="title">ID: @873bdakm</div>
                    </div>
                </div>
            </div>
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

                $("<li></li>").appendTo($("#trans-in-dots"))
			}

            $("#trans-in-dots li").first().addClass("current")
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

                        $("#trans-in-dots li").eq( this.now ).addClass("current").siblings().removeClass("current")
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

    // $("#trans-in-dots li").on("click", function(){
    //     $("#trans-in-dots li").eq( $(this).index() ).addClass("current").siblings().removeClass("current")
    // })
</script>