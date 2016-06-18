<?php
/*
 Template Name: Apresentação EP
*/
?>

<?php get_header('interno'); ?>

		<section id="apresentacao-ep" class="container-fluid padding-t-5">

			<!-- Inicio da Seção do Cabeçalho -->
			<div class="row">
				<div id="cabecalho" class="margin-t-4 padding-b-4">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
						<div id="imagem-de-fundo"></div>
						<div id="imagem-da-frente" class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
							<img src="<?php echo get_template_directory_uri() . '/library/images/capa-ep.png' ?>" width="100%" height="100%">
						</div>
					</div>
				</div>
			</div>
			<!-- Fim da Seção do Cabeçalho -->

			<!-- Inicio do Corpo Mobile/Tablet -->
				<!-- Seção do Corpo -->
					<div id="corpo" class="row hidden-md hidden-lg">
						<!-- Inicio da Bio e Titulo da banda -->
						<div id="corpo-col-1" class="col-xs-12 col-sm-12 padding-t-2">
							<div class="col-xs-12 col-sm-12 padding-t-2 margin-b-2">
								<div class="col-xs-6 col-sm-6">
									<p id="titulo-ep"><?php _e('Broove EP','temadebroove') ?></p>
									<p id="autor-ep"><?php _e('por', 'temadebroove') ?> <span id="autor-broove"><?php _e('Broove', 'temadebroove') ?></span></p>
								</div>
								<div class="col-xs-6 col-sm-6">
									<p id="bio-ep"><?php _e('Banda brasileira de verdades.', 'temadebroove') ?></p>
									<p id="data-ep"><?php _e('Lançamento 2016', 'temadebroove') ?></p>
								</div>
							</div>
						</div>
						<!-- Fim da Bio e Titulo da banda -->

						<!-- Inicio dos Players e Letras -->
						<div id="corpo-col-2" class="col-xs-12 col-sm-12">

							<!-- Inicio de TEMA DE BROOVE -->
							<div class="row margin-b-2">
								<div class="col-xs-12 col-sm-12">
									<div class="col-xs-12 col-sm-12">
										<span class="col-xs-8 col-sm-8 text-left titulo-musica">
											<?php _e('Tema de Broove','temadebroove') ?>
										</span>
										<div class="col-xs-4 col-sm-4">
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
												<a class="icon-letras" href="#TemaDeBroove" data-toggle="modal" data-target="#modalTemaDeBroove">
													<i class="fa fa-music"></i>
												</a>
											</span>
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
													<a class="icon-letras" href="https://goo.gl/gOpBLa" target="_blank">
														<i class="fa fa-download"></i>
													</a>
											</span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12">
										<div class="col-xs-12 col-sm-12 tocador-musica">
											<audio class="col-xs-12 col-sm-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_tema-de-broove.mp3'); ?>" preload="auto">
												<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
											</audio>
										</div>
									</div>
									<div id="modalTemaDeBroove" aria-labelledby="modalTemaDeBroove" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
												<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																<i class="fa fa-close"></i>
															</button>
															<h4 class="modal-title text-center">
																<?php _e('Tema de Broove','temadebroove') ?>
															</h4>
														</div>
														<div class="modal-body">
																<p class="letra-da-musica">
																	Eu não quero estar certo<br/>
																	prefiro ter que me contentar com nada,<br/>
																	nada!<br/>
																	<br/>
																	Eu vi lá fora mais um dia e o caos me convida<br/>
																	a enlouquecer nessa trilha,<br/>
																	cantando!<br/>
																	<br/>
																	Então vamos deixar que o dia siga seu curso,<br/>
																	pulso na estante nos convida a sorrir.<br/>
																	Vamos deixar e o que quer que eu diga<br/>
																	é só pretexto pro dia seguir,<br/>
																	seguir!<br/>
																	<br/>
																	Eu não quero estar frito<br/>
																	prefiro ter que me preocupar com nada,<br/>
																	nada!<br/>
																	<br/>
																	Eu vi lá fora um milhão de pessoas mas elas nunca se olham<br/>
																	e dão ibope ao ladrilho todo dia (todo dia!)<br/>
																	<br/>
																	Então vamos deixar que o dia siga seu curso,<br/>
																	pulso na estante nos convida a sorrir.<br/>
																	Vamos deixar e o que quer que eu diga<br/>
																	é só pretexto pro dia seguir,<br/>
																	seguir!<br/>
																	<br/>
																	<br/>
																	E se estar certo nunca foi a solução,<br/>
																	é hora de parar, de mudar, ser leão.<br/>
																	Na vida a gente tem que ser feliz, o que há?<br/>
																	Vai gritar, vai correr, tropeçar e se perder?<br/>
																	Se liga agora nesse Broove bom, vamo lá<br/>
																	Sente a música e deixe-se levar<br/>
																	A hora certa de acontecer vai chegar
																	o dia tá la fora te chamando, vai, vai!<br/>
																	<br/>
																	Os seus problemas você deve esquecer (4x)<br/>
																	<br/>
																	<br/>
																	E passa daqui, e corre de lá,<br/>
																	e volta outra vez, vem me levar!<br/>
																	E olha pra mim, me diz o que eu sei,<br/>
																	me lança no ar, vem me levar! (2x)<br/>
																	<br/>
																	Me levar!
																	Me levar!
																	<br/>
																	Os seus problemas você deve esquecer (4x)<br/>
																</p>
														</div>
												</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim de TEMA DE BROOVE -->

							<!-- Inicio de OLHAR -->
							<div class="row margin-b-2">
								<div class="col-xs-12 col-sm-12">
									<div class="col-xs-12 col-sm-12">
										<span class="col-xs-8 col-sm-8 text-left titulo-musica">
											<?php _e('Olhar','temadebroove') ?>
										</span>
										<div class="col-xs-4 col-sm-4">
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
												<a class="icon-letras" href="#Olhar" data-toggle="modal" data-target="#modalOlhar">
													<i class="fa fa-music"></i>
												</a>
											</span>
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
													<a class="icon-letras" href="https://goo.gl/derc6G" target="_blank">
														<i class="fa fa-download"></i>
													</a>
											</span>
										</div>
										</span>
									</div>
									<div class="col-xs-12 col-sm-12">
										<div class="col-xs-12 col-sm-12 tocador-musica">
											<audio class="col-xs-12 col-sm-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_olhar.mp3'); ?>" preload="auto">
												<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
											</audio>
										</div>
									</div>
									<div id="modalOlhar" aria-labelledby="modalOlhar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
												<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																<i class="fa fa-close"></i>
															</button>
															<h4 class="modal-title text-center">
																<?php _e('Olhar','temadebroove') ?>
															</h4>
														</div>
														<div class="modal-body">
																<p class="letra-da-musica">
																	Te ver chegar, te contemplar<br/>
																	Com todos os sinais que seu olhar tem pra mostrar.<br/>
																	Te conhecer, e me assustar<br/>
																	Com tudo aquilo que você consegue despertar.<br/>
																	<br/>
																	Ah... Como você faz pra saber?<br/>
																	Ah... Como você sabe prever<br/>
																	tudo o que eu sinto quando olho pra você?<br/>
																	<br/>
																	Acompanhar, sem alcançar<br/>
																	O que o horizonte traz aos olhos pra brilhar<br/>
																	E mesmo que eu não queira<br/>
																	Um dia passo apenas pra lembrar...<br/>
																	<br/>
																	Ah... Como você faz pra saber?<br/>
																	Ah... Como você sabe prever<br/>
																	tudo o que eu sinto quando olho pra você?<br/>
																	Ah... Finjo que não sei entender<br/>
																	tudo o que eu sinto quando olho pra você…<br/>
																</p>
														</div>
												</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim de OLHAR -->

							<!-- Inicio de SESDOTEMPO -->
							<div class="row margin-b-2">
								<div class="col-xs-12 col-sm-12">
									<div class="col-xs-12 col-sm-12">
										<span class="col-xs-8 col-sm-8 text-left titulo-musica">
											<?php _e('Sesdotempo','temadebroove') ?>
										</span>
										<div class="col-xs-4 col-sm-4">
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
												<a class="icon-letras" href="#Sesdotempo" data-toggle="modal" data-target="#modalSesdotempo">
													<i class="fa fa-music"></i>
												</a>
											</span>
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
													<a class="icon-letras" href="http://goo.gl/nPni4s" target="_blank">
														<i class="fa fa-download"></i>
													</a>
											</span>
										</div>
										</span>
									</div>
									<div class="col-xs-12 col-sm-12">
										<div class="col-xs-12 col-sm-12 tocador-musica">
											<audio class="col-xs-12 col-sm-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_sesdotempo.mp3'); ?>" preload="auto">
												<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
											</audio>
										</div>
									</div>
									<div id="modalSesdotempo" aria-labelledby="modalSesdotempo" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
												<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																<i class="fa fa-close"></i>
															</button>
															<h4 class="modal-title text-center">
																<?php _e('Sesdotempo','temadebroove') ?>
															</h4>
														</div>
														<div class="modal-body">
																<p class="letra-da-musica">
																	Se soubéssemos do tempo a perder<br/>
																	Se fizéssemos dele, nosso riso enfim valer<br/>
																	Se a monotonia não nos custasse tão caro<br/>
																	Se a grana rendesse até o fim do mês, uma vez...<br/>
																	<br/>
																	Mas, eu nunca acerto o tempo (eu nunca acerto)<br/>
																	Eu venho um mês antes, um mês depois...<br/>
																	<br/>
																	Se o vento não levantasse o meu cabelo<br/>
																	Se o sol não fosse tão raro<br/>
																	Se o olhar não fosse tão claro<br/>
																	Se o copo nunca se deixasse esvaziar, pra brindar...<br/>
																	<br/>
																	Ainda assim as mãos saberiam o caminho<br/>
																	E elas nunca deixariam de se abraçar<br/>
																	E os olhos nunca deixariam de se perder<br/>
																	No infinito do oposto<br/>
																	E os beijos seriam sempre vivos<br/>
																	Sempre seguidos de um sorriso tímido<br/>
																	Se soubéssemos mesmo, soubéssemos dele e de nós…(bis)<br/>
																</p>
														</div>
												</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim de SESDOTEMPO -->

							<!-- Inicio de ICARO -->
							<div class="row margin-b-2">
								<div class="col-xs-12 col-sm-12">
									<div class="col-xs-12 col-sm-12">
										<span class="col-xs-8 col-sm-8 text-left titulo-musica">
											<?php _e('Icaro','temadebroove') ?>
										</span>
										<div class="col-xs-4 col-sm-4">
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
												<a class="icon-letras" href="#Icaro" data-toggle="modal" data-target="#modalIcaro">
													<i class="fa fa-music"></i>
												</a>
											</span>
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
													<a class="icon-letras" href="https://goo.gl/TjYUqV" target="_blank">
														<i class="fa fa-download"></i>
													</a>
											</span>
										</div>
										</span>
									</div>
									<div class="col-xs-12 col-sm-12">
										<div class="col-xs-12 col-sm-12 tocador-musica">
											<audio class="col-xs-12 col-sm-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_icaro.mp3'); ?>" preload="auto">
												<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
											</audio>
										</div>
									</div>
									<div id="modalIcaro" aria-labelledby="modalIcaro" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
												<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																<i class="fa fa-close"></i>
															</button>
															<h4 class="modal-title text-center">
																<?php _e('Icaro','temadebroove') ?>
															</h4>
														</div>
														<div class="modal-body">
																<p class="letra-da-musica">
																	Procuro algo novo pra remar</br>
																	Andar, eu aprendi: Não vai adiantar</br>
																	E o vento me conduz até chegar</br>
																	Em terra firme em fim</br>
																	De maré já está bom pra mim</br>
																	</br>
																	Tanto ao pôr do sol.</br>
																	Outro ali está,</br>
																	Também tem muito pra contar</br>
																	Em busca ao tal do onde</br>
																	Parece estar tão longe</br>
																	Pensei que aqui já era o chegar</br>
																	</br>
																	Não tenho tempo pra perder</br>
																	Não tenho medo de correr</br>
																	Agora eu quero voar!</br>
																	</br>
																	No tempo da certeza obedeci</br>
																	Vontades em gavetas como luvas no verão.</br>
																	Espaço são tão longos</br>
																	Quando não se sabe aonde quer chegar</br>
																	</br>
																	Me lanço rumo ao sol.</br>
																	Um outro ali está também tem pra contar</br>
																	Vivendo a liberdade, acostumado a arriscar.</br>
																	Cantou que era a hora de voar.</br>
																	</br>
																	Não tenho tempo pra perde.</br>
																	Não tenho medo de correr</br>
																	Agora eu quero voar!</br>
																	Não tenho tempo pra perde</br>
																	Se precisar posso correr</br>
																	</br>
																	Olha,</br>
																	Tem muita gente pra fazer você parar</br>
																	E te fazer perder a mente de sonhar,</br>
																	Dizendo: quando eu crescer,</br>
																	O que eu vou ser?</br>
																	Quero viver e não sofrer.</br>
																	Mas o sonho traz a força pra lutar</br>
																	Faz da vida algo que te ensina a voar</br>
																	Não fecha a alma pra um novo dia</br>
																	Espalhe sorte e alegria</br>
																	Procure estar em forma na boa com você, saiba o que ‘’se’’ quer pra saber o que fazer.</br>
																	Seja sincero não tem mistério, está aí dentro você vai ver!</br>
																	Ás vezes até parece que o mais fácil é mais difícil.</br>
																	Incrível!</br>
																	</br>
																	Não tenho tempo pra perder.</br>
																	Não tenho medo de correr</br>
																	Agora eu quero voar!</br>
																	Não tenho tempo pra perder</br>
																	Se precisar posso correr</br>
																	</br>
																	Mas sei que posso voar (x2)</br>
																</p>
														</div>
												</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim de ICARO -->

							<!-- Inicio de PLIN -->
							<div class="row margin-b-2">
								<div class="col-xs-12 col-sm-12">
									<div class="col-xs-12 col-sm-12">
										<span class="col-xs-8 col-sm-8 text-left titulo-musica">
											<?php _e('Plin','temadebroove') ?>
										</span>
										<div class="col-xs-4 col-sm-4">
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
												<a class="icon-letras" href="#Plin" data-toggle="modal" data-target="#modalPlin">
													<i class="fa fa-music"></i>
												</a>
											</span>
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
													<a class="icon-letras" href="https://goo.gl/C857zs" target="_blank">
														<i class="fa fa-download"></i>
													</a>
											</span>
										</div>
										</span>
									</div>
									<div class="col-xs-12 col-sm-12">
										<div class="col-xs-12 col-sm-12 tocador-musica">
											<audio class="col-xs-12 col-sm-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_plin.mp3'); ?>" preload="auto">
												<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
											</audio>
										</div>
									</div>
									<div id="modalPlin" aria-labelledby="modalPlin" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
												<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																<i class="fa fa-close"></i>
															</button>
															<h4 class="modal-title text-center">
																<?php _e('Plin','temadebroove') ?>
															</h4>
														</div>
														<div class="modal-body">
																<p class="letra-da-musica">
																	As flores no quadro já não correspondem<br/>
																	Mais ao que eu vejo<br/>
																	As borboletas coloridas, por mais que pareçam,<br/>
																	Não são as mesmas<br/>
																	<br/>
																	A sensação de liberdade invade<br/>
																	Quando queremos estar perto e na distância<br/>
																	O sentimento é a certeza da insegurança<br/>
																	<br/>
																	Plin! Virou às costas e tudo voltou a ser como era<br/>
																	Plin! A realidade é pior depois de um sonho bom... (x2)<br/>
																	<br/>
																	Meu rosto no espelho já não corresponde<br/>
																	Mais ao que eu vejo<br/>
																	As coincidências no meu dia, por mais que pareçam,<br/>
																	Não são as mesmas<br/>
																	<br/>
																	A sensação de liberdade invade<br/>
																	Quando queremos estar perto e na distância<br/>
																	O sentimento é a certeza da insegurança<br/>
																	<br/>
																	Plin! Virou às costas e tudo voltou a ser como era<br/>
																	Plin! A realidade é pior depois de um sonho bom…<br/>
																</p>
														</div>
												</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim de PLIN -->

							<!-- Inicio de DE HOJE NAO PASSA -->
							<div class="row margin-b-2">
								<div class="col-xs-12 col-sm-12">
									<div class="col-xs-12 col-sm-12">
										<span class="col-xs-8 col-sm-8 text-left titulo-musica">
											<?php _e('De Hoje Nao Passa','temadebroove') ?>
										</span>
										<div class="col-xs-4 col-sm-4">
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
												<a class="icon-letras" href="#DeHojeNaoPassa" data-toggle="modal" data-target="#modalDeHojeNaoPassa">
													<i class="fa fa-music"></i>
												</a>
											</span>
											<span class="col-xs-6 col-sm-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
													<a class="icon-letras" href="https://goo.gl/GOf0a1" target="_blank">
														<i class="fa fa-download"></i>
													</a>
											</span>
										</div>
										</span>
									</div>
									<div class="col-xs-12 col-sm-12">
										<div class="col-xs-12 col-sm-12 tocador-musica">
											<audio class="col-xs-12 col-sm-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_de-hoje-nao-passa.mp3'); ?>" preload="auto">
												<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
											</audio>
										</div>
									</div>
									<div id="modalDeHojeNaoPassa" aria-labelledby="modalDeHojeNaoPassa" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog">
												<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																<i class="fa fa-close"></i>
															</button>
															<h4 class="modal-title text-center">
																<?php _e('De Hoje Nao Passa','temadebroove') ?>
															</h4>
														</div>
														<div class="modal-body">
																<p class="letra-da-musica">
																	Preciso sair, não sei pra onde<br/>
																	Hoje o mundo vai dizer o que eu quero ouvir<br/>
																	E pode chover, o céu cair<br/>
																	Em algum lugar está o futuro que eu me prometi<br/>
																	<br/>
																	E já são tantas, seja descaso ou azar<br/>
																	De hoje não passa... Não!<br/>
																	<br/>
																	Preciso sair, sem decidir<br/>
																	Não vem com seu limite o tempo é curto, eu não posso perder<br/>
																	Tire o seu orgulho, a sua estupidez do meu caminho<br/>
																	Não quero ouvir, eu já sei muito bem o que é tocar o chão...<br/>
																	<br/>
																	E já são tantas, seja descaso ou azar<br/>
																	De hoje não passa... Não!<br/>
																	<br/>
																	No grito na mão é meu, passa pra cá… (bis)<br/>
																	É meu, é meu, é meu…
																</p>
														</div>
												</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Fim de DE HOJE NAO PASSA -->

						</div>
						<!-- Fim dos Players e Letras -->

						<!-- Inicio do Download -->
						<div id="corpo-col-3" class="col-xs-12 col-sm-12">
							<div class="padding-t-2 padding-b-2 margin-b-2 text-center">
								<a id="btn-download-ep" href="/baixe/Broove-Broove[EP].zip" download>
									<?php _e('Baixar Album', 'temadebroove') ?>
								</a>
							</div>
						</div>
						<!-- Fim do Download -->
					</div>
				<!-- Fim da Seção Corpo -->
			<!-- Fim do Corpo Mobile/Tablet -->

			<!-- Inicio do Corpo Tablet/Desktop -->
				<!-- Seção do Corpo -->
					<div id="corpo" class="row hidden-xs hidden-sm">
						<div class="row padding-t-2 ajuste-bg">
							<!-- Inicio da Bio e Titulo da banda -->
							<div id="corpo-col-1" class="col-md-5 col-lg-5">
									<div class="padding-t-2 margin-b-2 text-right">
										<div class="col-md-12 col-lg-12">
											<p id="titulo-ep"><?php _e('Broove EP','temadebroove') ?></p>
											<p id="autor-ep"><?php _e('por', 'temadebroove') ?> <span id="autor-broove"><?php _e('Broove', 'temadebroove') ?></span></p>
										</div>
										<div class="col-md-12 col-lg-12 margin-t-2">
											<p id="bio-ep"><?php _e('Banda brasileira de verdades.', 'temadebroove') ?></p>
											<p id="data-ep"><?php _e('Lançamento 2016', 'temadebroove') ?></p>
										</div>
										<div id="btn-download-div" class="col-md-12 col-lg-12 margin-t-2">
											<a id="btn-download-ep" href="https://goo.gl/LQ4zdz" target="_blank">
												<?php _e('Baixar Album', 'temadebroove') ?>
											</a>
										</div>
									</div>
							</div>
							<!-- Fim da Bio e Titulo da banda -->

							<!-- Inicio dos Players e Letras -->
							<div id="corpo-col-2" class="col-md-7 col-lg-7">

								<!-- Inicio de TEMA DE BROOVE -->
								<div class="row margin-b-2">
									<div class="col-md-12 col-lg-12">
										<div class="col-md-12 col-lg-12">
											<span class="col-md-8 col-lg-8 text-left titulo-musica">
												<?php _e('Tema de Broove','temadebroove') ?>
											</span>
											<div class="col-md-4 col-lg-4">
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
													<a class="icon-letras" href="#TemaDeBroove" data-toggle="modal" data-target="#modalTemaDeBroove">
														<i class="fa fa-music"></i>
													</a>
												</span>
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
														<a class="icon-letras" href="https://goo.gl/gOpBLa" target="_blank">
															<i class="fa fa-download"></i>
														</a>
												</span>
											</div>
										</div>
										<div class="col-md-12 col-lg-12">
											<div class="col-md-12 col-lg-12 tocador-musica">
												<audio class="col-md-12 col-lg-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_tema-de-broove.mp3'); ?>" preload="auto">
													<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
												</audio>
											</div>
										</div>
										<div id="modalTemaDeBroove" aria-labelledby="modalTemaDeBroove" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
													<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																	<i class="fa fa-close"></i>
																</button>
																<h4 class="modal-title text-center">
																	<?php _e('Tema de Broove','temadebroove') ?>
																</h4>
															</div>
															<div class="modal-body">
																	<p class="letra-da-musica">
																		Eu não quero estar certo<br/>
																		prefiro ter que me contentar com nada,<br/>
																		nada!<br/>
																		<br/>
																		Eu vi lá fora mais um dia e o caos me convida<br/>
																		a enlouquecer nessa trilha,<br/>
																		cantando!<br/>
																		<br/>
																		Então vamos deixar que o dia siga seu curso,<br/>
																		pulso na estante nos convida a sorrir.<br/>
																		Vamos deixar e o que quer que eu diga<br/>
																		é só pretexto pro dia seguir,<br/>
																		seguir!<br/>
																		<br/>
																		Eu não quero estar frito<br/>
																		prefiro ter que me preocupar com nada,<br/>
																		nada!<br/>
																		<br/>
																		Eu vi lá fora um milhão de pessoas mas elas nunca se olham<br/>
																		e dão ibope ao ladrilho todo dia (todo dia!)<br/>
																		<br/>
																		Então vamos deixar que o dia siga seu curso,<br/>
																		pulso na estante nos convida a sorrir.<br/>
																		Vamos deixar e o que quer que eu diga<br/>
																		é só pretexto pro dia seguir,<br/>
																		seguir!<br/>
																		<br/>
																		<br/>
																		E se estar certo nunca foi a solução,<br/>
																		é hora de parar, de mudar, ser leão.<br/>
																		Na vida a gente tem que ser feliz, o que há?<br/>
																		Vai gritar, vai correr, tropeçar e se perder?<br/>
																		Se liga agora nesse Broove bom, vamo lá<br/>
																		Sente a música e deixe-se levar<br/>
																		A hora certa de acontecer vai chegar
																		o dia tá la fora te chamando, vai, vai!<br/>
																		<br/>
																		Os seus problemas você deve esquecer (4x)<br/>
																		<br/>
																		<br/>
																		E passa daqui, e corre de lá,<br/>
																		e volta outra vez, vem me levar!<br/>
																		E olha pra mim, me diz o que eu sei,<br/>
																		me lança no ar, vem me levar! (2x)<br/>
																		<br/>
																		Me levar!
																		Me levar!
																		<br/>
																		Os seus problemas você deve esquecer (4x)<br/>
																	</p>
															</div>
													</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim de TEMA DE BROOVE -->

								<!-- Inicio de OLHAR -->
								<div class="row margin-b-2">
									<div class="col-md-12 col-lg-12">
										<div class="col-md-12 col-lg-12">
											<span class="col-md-8 col-lg-8 text-left titulo-musica">
												<?php _e('Olhar','temadebroove') ?>
											</span>
											<div class="col-md-4 col-lg-4">
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
													<a class="icon-letras" href="#Olhar" data-toggle="modal" data-target="#modalOlhar">
														<i class="fa fa-music"></i>
													</a>
												</span>
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
														<a class="icon-letras" href="https://goo.gl/derc6G" target="_blank">
															<i class="fa fa-download"></i>
														</a>
												</span>
											</div>
											</span>
										</div>
										<div class="col-md-12 col-lg-12">
											<div class="col-md-12 col-lg-12 tocador-musica">
												<audio class="col-md-12 col-lg-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_olhar.mp3'); ?>" preload="auto">
													<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
												</audio>
											</div>
										</div>
										<div id="modalOlhar" aria-labelledby="modalOlhar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
													<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																	<i class="fa fa-close"></i>
																</button>
																<h4 class="modal-title text-center">
																	<?php _e('Olhar','temadebroove') ?>
																</h4>
															</div>
															<div class="modal-body">
																	<p class="letra-da-musica">
																		Te ver chegar, te contemplar<br/>
																		Com todos os sinais que seu olhar tem pra mostrar.<br/>
																		Te conhecer, e me assustar<br/>
																		Com tudo aquilo que você consegue despertar.<br/>
																		<br/>
																		Ah... Como você faz pra saber?<br/>
																		Ah... Como você sabe prever<br/>
																		tudo o que eu sinto quando olho pra você?<br/>
																		<br/>
																		Acompanhar, sem alcançar<br/>
																		O que o horizonte traz aos olhos pra brilhar<br/>
																		E mesmo que eu não queira<br/>
																		Um dia passo apenas pra lembrar...<br/>
																		<br/>
																		Ah... Como você faz pra saber?<br/>
																		Ah... Como você sabe prever<br/>
																		tudo o que eu sinto quando olho pra você?<br/>
																		Ah... Finjo que não sei entender<br/>
																		tudo o que eu sinto quando olho pra você…<br/>
																	</p>
															</div>
													</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim de OLHAR -->

								<!-- Inicio de SESDOTEMPO -->
								<div class="row margin-b-2">
									<div class="col-md-12 col-lg-12">
										<div class="col-md-12 col-lg-12">
											<span class="col-md-8 col-lg-8 text-left titulo-musica">
												<?php _e('Sesdotempo','temadebroove') ?>
											</span>
											<div class="col-md-4 col-lg-4">
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
													<a class="icon-letras" href="#Sesdotempo" data-toggle="modal" data-target="#modalSesdotempo">
														<i class="fa fa-music"></i>
													</a>
												</span>
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
														<a class="icon-letras" href="http://goo.gl/nPni4s" target="_blank">
															<i class="fa fa-download"></i>
														</a>
												</span>
											</div>
											</span>
										</div>
										<div class="col-md-12 col-lg-12">
											<div class="col-md-12 col-lg-12 tocador-musica">
												<audio class="col-md-12 col-lg-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_sesdotempo.mp3'); ?>" preload="auto">
													<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
												</audio>
											</div>
										</div>
										<div id="modalSesdotempo" aria-labelledby="modalSesdotempo" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
													<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																	<i class="fa fa-close"></i>
																</button>
																<h4 class="modal-title text-center">
																	<?php _e('Sesdotempo','temadebroove') ?>
																</h4>
															</div>
															<div class="modal-body">
																	<p class="letra-da-musica">
																		Se soubéssemos do tempo a perder<br/>
																		Se fizéssemos dele, nosso riso enfim valer<br/>
																		Se a monotonia não nos custasse tão caro<br/>
																		Se a grana rendesse até o fim do mês, uma vez...<br/>
																		<br/>
																		Mas, eu nunca acerto o tempo (eu nunca acerto)<br/>
																		Eu venho um mês antes, um mês depois...<br/>
																		<br/>
																		Se o vento não levantasse o meu cabelo<br/>
																		Se o sol não fosse tão raro<br/>
																		Se o olhar não fosse tão claro<br/>
																		Se o copo nunca se deixasse esvaziar, pra brindar...<br/>
																		<br/>
																		Ainda assim as mãos saberiam o caminho<br/>
																		E elas nunca deixariam de se abraçar<br/>
																		E os olhos nunca deixariam de se perder<br/>
																		No infinito do oposto<br/>
																		E os beijos seriam sempre vivos<br/>
																		Sempre seguidos de um sorriso tímido<br/>
																		Se soubéssemos mesmo, soubéssemos dele e de nós…(bis)<br/>
																	</p>
															</div>
													</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim de SESDOTEMPO -->

								<!-- Inicio de ICARO -->
								<div class="row margin-b-2">
									<div class="col-md-12 col-lg-12">
										<div class="col-md-12 col-lg-12">
											<span class="col-md-8 col-lg-8 text-left titulo-musica">
												<?php _e('Icaro','temadebroove') ?>
											</span>
											<div class="col-md-4 col-lg-4">
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
													<a class="icon-letras" href="#Icaro" data-toggle="modal" data-target="#modalIcaro">
														<i class="fa fa-music"></i>
													</a>
												</span>
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
														<a class="icon-letras" href="https://goo.gl/TjYUqV" target="_blank">
															<i class="fa fa-download"></i>
														</a>
												</span>
											</div>
											</span>
										</div>
										<div class="col-md-12 col-lg-12">
											<div class="col-md-12 col-lg-12 tocador-musica">
												<audio class="col-md-12 col-lg-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_icaro.mp3'); ?>" preload="auto">
													<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
												</audio>
											</div>
										</div>
										<div id="modalIcaro" aria-labelledby="modalIcaro" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
													<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																	<i class="fa fa-close"></i>
																</button>
																<h4 class="modal-title text-center">
																	<?php _e('Icaro','temadebroove') ?>
																</h4>
															</div>
															<div class="modal-body">
																	<p class="letra-da-musica">
																		Procuro algo novo pra remar</br>
																		Andar, eu aprendi: Não vai adiantar</br>
																		E o vento me conduz até chegar</br>
																		Em terra firme em fim</br>
																		De maré já está bom pra mim</br>
																		</br>
																		Tanto ao pôr do sol.</br>
																		Outro ali está,</br>
																		Também tem muito pra contar</br>
																		Em busca ao tal do onde</br>
																		Parece estar tão longe</br>
																		Pensei que aqui já era o chegar</br>
																		</br>
																		Não tenho tempo pra perder</br>
																		Não tenho medo de correr</br>
																		Agora eu quero voar!</br>
																		</br>
																		No tempo da certeza obedeci</br>
																		Vontades em gavetas como luvas no verão.</br>
																		Espaço são tão longos</br>
																		Quando não se sabe aonde quer chegar</br>
																		</br>
																		Me lanço rumo ao sol.</br>
																		Um outro ali está também tem pra contar</br>
																		Vivendo a liberdade, acostumado a arriscar.</br>
																		Cantou que era a hora de voar.</br>
																		</br>
																		Não tenho tempo pra perde.</br>
																		Não tenho medo de correr</br>
																		Agora eu quero voar!</br>
																		Não tenho tempo pra perde</br>
																		Se precisar posso correr</br>
																		</br>
																		Olha,</br>
																		Tem muita gente pra fazer você parar</br>
																		E te fazer perder a mente de sonhar,</br>
																		Dizendo: quando eu crescer,</br>
																		O que eu vou ser?</br>
																		Quero viver e não sofrer.</br>
																		Mas o sonho traz a força pra lutar</br>
																		Faz da vida algo que te ensina a voar</br>
																		Não fecha a alma pra um novo dia</br>
																		Espalhe sorte e alegria</br>
																		Procure estar em forma na boa com você, saiba o que ‘’se’’ quer pra saber o que fazer.</br>
																		Seja sincero não tem mistério, está aí dentro você vai ver!</br>
																		Ás vezes até parece que o mais fácil é mais difícil.</br>
																		Incrível!</br>
																		</br>
																		Não tenho tempo pra perder.</br>
																		Não tenho medo de correr</br>
																		Agora eu quero voar!</br>
																		Não tenho tempo pra perder</br>
																		Se precisar posso correr</br>
																		</br>
																		Mas sei que posso voar (x2)</br>
																	</p>
															</div>
													</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim de ICARO -->

								<!-- Inicio de PLIN -->
								<div class="row margin-b-2">
									<div class="col-md-12 col-lg-12">
										<div class="col-md-12 col-lg-12">
											<span class="col-md-8 col-lg-8 text-left titulo-musica">
												<?php _e('Plin','temadebroove') ?>
											</span>
											<div class="col-md-4 col-lg-4">
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
													<a class="icon-letras" href="#Plin" data-toggle="modal" data-target="#modalPlin">
														<i class="fa fa-music"></i>
													</a>
												</span>
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
														<a class="icon-letras" href="https://goo.gl/C857zs" target="_blank">
															<i class="fa fa-download"></i>
														</a>
												</span>
											</div>
											</span>
										</div>
										<div class="col-md-12 col-lg-12">
											<div class="col-md-12 col-lg-12 tocador-musica">
												<audio class="col-md-12 col-lg-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_plin.mp3'); ?>" preload="auto">
													<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
												</audio>
											</div>
										</div>
										<div id="modalPlin" aria-labelledby="modalPlin" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
													<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																	<i class="fa fa-close"></i>
																</button>
																<h4 class="modal-title text-center">
																	<?php _e('Plin','temadebroove') ?>
																</h4>
															</div>
															<div class="modal-body">
																	<p class="letra-da-musica">
																		As flores no quadro já não correspondem<br/>
																		Mais ao que eu vejo<br/>
																		As borboletas coloridas, por mais que pareçam,<br/>
																		Não são as mesmas<br/>
																		<br/>
																		A sensação de liberdade invade<br/>
																		Quando queremos estar perto e na distância<br/>
																		O sentimento é a certeza da insegurança<br/>
																		<br/>
																		Plin! Virou às costas e tudo voltou a ser como era<br/>
																		Plin! A realidade é pior depois de um sonho bom... (x2)<br/>
																		<br/>
																		Meu rosto no espelho já não corresponde<br/>
																		Mais ao que eu vejo<br/>
																		As coincidências no meu dia, por mais que pareçam,<br/>
																		Não são as mesmas<br/>
																		<br/>
																		A sensação de liberdade invade<br/>
																		Quando queremos estar perto e na distância<br/>
																		O sentimento é a certeza da insegurança<br/>
																		<br/>
																		Plin! Virou às costas e tudo voltou a ser como era<br/>
																		Plin! A realidade é pior depois de um sonho bom…<br/>
																	</p>
															</div>
													</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim de PLIN -->

								<!-- Inicio de DE HOJE NAO PASSA -->
								<div class="row margin-b-2">
									<div class="col-md-12 col-lg-12">
										<div class="col-md-12 col-lg-12">
											<span class="col-md-8 col-lg-8 text-left titulo-musica">
												<?php _e('De Hoje Nao Passa','temadebroove') ?>
											</span>
											<div class="col-md-4 col-lg-4">
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Letra', 'temadebroove') ?>">
													<a class="icon-letras" href="#DeHojeNaoPassa" data-toggle="modal" data-target="#modalDeHojeNaoPassa">
														<i class="fa fa-music"></i>
													</a>
												</span>
												<span class="col-md-6 col-lg-6 text-right" title="<?php _e('Download', 'temadebroove') ?>">
														<a class="icon-letras" href="https://goo.gl/GOf0a1" target="_blank">
															<i class="fa fa-download"></i>
														</a>
												</span>
											</div>
											</span>
										</div>
										<div class="col-md-12 col-lg-12">
											<div class="col-md-12 col-lg-12 tocador-musica">
												<audio class="col-md-12 col-lg-12" src="<?php echo(get_template_directory_uri () . '/library/songs/broove_de-hoje-nao-passa.mp3'); ?>" preload="auto">
													<p><?php _e('Seu navegador não suporta o elemento de áudio.','temadebroove') ?></p>
												</audio>
											</div>
										</div>
										<div id="modalDeHojeNaoPassa" aria-labelledby="modalDeHojeNaoPassa" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog">
													<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																	<i class="fa fa-close"></i>
																</button>
																<h4 class="modal-title text-center">
																	<?php _e('De Hoje Nao Passa','temadebroove') ?>
																</h4>
															</div>
															<div class="modal-body">
																	<p class="letra-da-musica">
																		Preciso sair, não sei pra onde<br/>
																		Hoje o mundo vai dizer o que eu quero ouvir<br/>
																		E pode chover, o céu cair<br/>
																		Em algum lugar está o futuro que eu me prometi<br/>
																		<br/>
																		E já são tantas, seja descaso ou azar<br/>
																		De hoje não passa... Não!<br/>
																		<br/>
																		Preciso sair, sem decidir<br/>
																		Não vem com seu limite o tempo é curto, eu não posso perder<br/>
																		Tire o seu orgulho, a sua estupidez do meu caminho<br/>
																		Não quero ouvir, eu já sei muito bem o que é tocar o chão...<br/>
																		<br/>
																		E já são tantas, seja descaso ou azar<br/>
																		De hoje não passa... Não!<br/>
																		<br/>
																		No grito na mão é meu, passa pra cá… (bis)<br/>
																		É meu, é meu, é meu…
																	</p>
															</div>
													</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim de DE HOJE NAO PASSA -->

							</div>
							<!-- Fim dos Players e Letras -->
						</div>
					</div>
				<!-- Fim da Seção Corpo -->
			<!-- Fim do Corpo Tablet/Desktop -->

		</section>
<?php get_footer(); ?>
